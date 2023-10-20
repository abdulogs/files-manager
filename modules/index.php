<?php

class module
{

    public static function folders()
    {
        $data = DB::select("id", "name");
        $data = DB::from("folders");
        $data = DB::where(["is_active" => 1]);
        $data = DB::sort("id", "DESC");
        $data = DB::paging();
        $data = DB::execute();
        $data = DB::fetch("all");
        return $data;
    }

    public static function files($id)
    {
        $data = DB::select("id", "name", "description", "file");
        $data = DB::from("files");
        $data = DB::where(["is_active" => 1, "folder_id" => $id]);
        $data = DB::sort("id", "DESC");
        $data = DB::paging();
        $data = DB::execute();
        $data = DB::fetch("all");
        return $data;
    }
}

// Init class for construct values
$module = new module();
