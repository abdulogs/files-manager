<?php
class module
{
    private static $action;
    private static $id;
    private static $name;
    private static $is_active;

    public function __construct()
    {
        self::$action = http::param("action");
        self::$id = http::param("id");
        self::$name = http::param("name");
        self::$is_active = http::param("is_active");
    }

    public static function listing()
    {
        $data = DB::select("f.id", "f.name", "f.is_active", "f.created_at", "f.updated_at", "u.firstname", "u.lastname");
        $data = DB::from("folders AS f");
        $data = DB::leftJoin("users AS u", "u.id", "f.created_by");
        $data = DB::sort("f.id", "DESC");
        $data = DB::paging();
        $data = DB::execute();
        $data = DB::fetch("all");
        return $data;
    }

    public static function single()
    {
        $data = DB::select("f.id", "f.name", "f.is_active", "f.created_at", "f.updated_at", "u.firstname", "u.lastname");
        $data = DB::from("folders AS f");
        $data = DB::leftJoin("users AS u", "u.id", "f.created_by");
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
            DB::create("folders", [
                "name" => self::$name,
                "is_active" => self::$is_active,
                "created_by" => session::get("id"),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ])::execute();

            msg::set("1 row created successfully", "success");
            http::redirect("folders");
        }
    }


    public static function update()
    {
        if (self::$action == "update") {

            DB::update("folders", [
                "name" => self::$name,
                "is_active" => self::$is_active,
                "updated_at" => date('Y-m-d H:i:s')
            ]);
            DB::where(["id" => self::$id]);
            DB::execute();

            msg::set("1 row updated successfully", "success");
            http::redirect("folders");
        }
    }

    public static function delete()
    {
        if (self::$action == "delete") {
            DB::delete("folders")::where(["id" => self::$id])::execute();
            msg::set("1 row deleted successfully", "success");
        }
    }
}
// Init class for construct values
$module = new module();
