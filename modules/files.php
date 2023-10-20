<?php
class module
{
    private static $action;
    private static $id;
    private static $name;
    private static $folder_id;
    private static $old_file;
    private static $description;
    private static $is_active;

    public function __construct()
    {
        self::$action = http::param("action");
        self::$id = http::param("id");
        self::$folder_id = http::param("folder_id");
        self::$name = http::param("name");
        self::$old_file = http::param("old_file");
        self::$description = http::param("description");
        self::$is_active = http::param("is_active");
    }

    public static function listing()
    {
        $data = DB::select("f.id", "f.name", "f.description", "f.file", "f.folder_id", "f.is_active");
        $data = DB::select("f.created_at", "f.updated_at", "u.firstname", "u.lastname", "fo.name AS folder");
        $data = DB::from("files AS f");
        $data = DB::leftJoin("users AS u", "u.id", "f.created_by");
        $data = DB::leftJoin("folders AS fo", "fo.id", "f.folder_id");
        $data = DB::sort("f.id", "DESC");
        $data = DB::paging();
        $data = DB::execute();
        $data = DB::fetch("all");
        return $data;
    }

    public static function single()
    {
        $data = DB::select("f.id", "f.name", "f.description", "f.file", "f.folder_id", "f.is_active");
        $data = DB::select("f.created_at", "f.updated_at", "u.firstname", "u.lastname", "fo.name AS folder");
        $data = DB::from("files AS f");
        $data = DB::leftJoin("users AS u", "u.id", "f.created_by");
        $data = DB::leftJoin("folders AS fo", "fo.id", "f.folder_id");
        $data = DB::where(["f.id" => self::$id]);
        $data = DB::execute();
        $data = DB::fetch("one");
        if (!$data) {
            http::redirect("404");
        } else {
            return $data;
        }
    }

    public static function create()
    {
        if (self::$action == "create") {
            $file = media::file("file");
            $file = media::name("file");
            $file = media::folder("uploads/files");

            DB::create("files", [
                "name" => self::$name,
                "folder_id" => self::$folder_id,
                "description" => self::$description,
                "file" =>  "files/{$file}",
                "is_active" => self::$is_active,
                "created_by" => session::get("id"),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ])::execute();

            msg::set("1 row created successfuly", "success");
            http::redirect("files");
        }
    }


    public static function update()
    {
        if (self::$action == "update") {

            if (!empty(($_FILES["file"]['name']))) {
                $file = media::file("file");
                $file = media::name("file");
                $file = media::folder("uploads/files");
                $file = "files/{$file}";
                media::remove("uploads/" . self::$old_file);
            } else {
                $file = self::$old_file;
            }

            DB::update("files", [
                "name" => self::$name,
                "folder_id" => self::$folder_id,
                "description" => self::$description,
                "file" =>  $file,
                "is_active" => self::$is_active,
                "updated_at" => date('Y-m-d H:i:s')
            ]);
            DB::where(["id" => self::$id]);
            DB::execute();

            msg::set("1 row updated successfuly", "success");
            http::redirect("files");
        }
    }

    public static function delete()
    {
        if (self::$action == "delete") {
            $file = DB::select("file")::from("files")::where(["id" => self::$id])::execute()::fetch("one");
            media::remove("uploads/" . $file["file"]);

            DB::delete("files")::where(["id" => self::$id])::execute();
            msg::set("1 row deleted successfuly", "success");
        }
    }

    public static function folders()
    {
        $data = DB::select("id", "name");
        $data = DB::from("folders AS f");
        $data = DB::sort("id", "DESC");
        $data = DB::paging();
        $data = DB::execute();
        $data = DB::fetch("all");
        return $data;
    }
}
// Init class for construct values
$module = new module();
