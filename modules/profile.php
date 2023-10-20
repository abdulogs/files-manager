<?php
class module {

    private static $action;
    private static $firstname;
    private static $lastname;
    private static $username;
    private static $email;
    private static $npassword;
    private static $cpassword;

    public function __construct(){
        self::$action = http::param("action");
        self::$firstname = http::param("firstname");
        self::$lastname = http::param("lastname");
        self::$username = http::param("username");
        self::$email = http::param("email");
        self::$npassword = http::param("npassword");
        self::$cpassword = http::param("cpassword");
    }


    public static function general(){
        if(self::$action == "general"){
            $data = DB::update("users", [
                "firstname" => self::$firstname,
                "lastname" => self::$lastname,
                "username" => self::$username,
                "email" => self::$email,
                "updated_at" => date('Y-m-d H:i:s')
            ]);
            $data = DB::where(["id" => session::get("id")]);
            $data = DB::execute();
            msg::set("Profile updated successfuly","success");
            http::redirect("profile");
        }
    }


    public static function change_password(){
        if(self::$action == "change_password"){
            if(self::$npassword == self::$cpassword){
                $data = DB::update("users", [
                    "password" => md5(self::$npassword),
                    "updated_at" => date('Y-m-d H:i:s')
                ]);
                $data = DB::where(["id" => session::get("id")]);
                $data = DB::execute();            
                        
                msg::set("Password changed successfuly","success");
                http::redirect("change-password");
            } else {
                msg::set("Password not matched","error");
            }
        }
    }
}

// Init class for construct values
$module = new module();
?>