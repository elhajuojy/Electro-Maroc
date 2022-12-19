<?php

namespace Core;

define("MB", 1048576);

class functions
{



    public static function dd($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }

    public static function urlIs($value): bool
    {
        return $_SERVER['REQUEST_URI'] === $value;
    }



    public static function goToPage(string $location, $code = 200,$args = [])
    {
        http_response_code($code);
        extract($args);
        header("location: " . $location);
        exit();
    }
    public static function islogedIn($value): void
    {
        if (!isset($_SESSION[$value])) {
            self::goToPage("/");
        }
    }




    public static function logOut():void
    {
        session_start();
        session_unset();
        session_destroy();
        self::goToPage("/");
    }




    
    
    

   
}
