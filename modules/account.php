<?php
class module {
    public static $action;
    private static $email;
    private static $password;

    public function __construct(){
        self::$action = http::param("action");
        self::$email = http::param("email");
        self::$password = http::param("password");
    }

    public static function login(){
        if(self::$action == "login"){
            $data = auth::authenticate(self::$email, self::$password);
            if($data){
                if($data["is_status"] == 0){
                    msg::set("Your account is not approved yet!","error");
                } else {
                    session::set("id", $data["id"]);
                    session::set("is_role", $data["is_role"]);

                    DB::create("login_history", [
                        "status" => 1,
                        "member_id" => session::get("id"),
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s')
                    ])::execute();

                    msg::set("Login successfuly!","success");
                    http::redirect("home");
                }
            } else {
                msg::set("Invalid credentials!","error");
            }
        }
    }
}

// Init class for construct values
$module = new module();
?>