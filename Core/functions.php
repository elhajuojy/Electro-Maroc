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



    public static function goTo(string $location, $code = 200,$args = [])
    {
        extract($args);
        header("location: " . $location);
        exit();
    }
    public static function islogedIn($value): void
    {
        if (!isset($_SESSION[$value])) {
            self::goTo("/");
        }
    }
    public static function logOut():void
    {
        session_start();
        session_unset();
        session_destroy();
        self::goTo("/");
    }
    
    public static function rander($path, $args = []):void
    {
        extract($args);
        require "./views/" . $path . ".php";
    }


    public static function get($value)
    {
        if (isset($_GET[$value])) {
            return $_GET[$value];
        }
    }
    public static function post($value)
    {
        if (isset($_POST[$value])) {
            return $_POST[$value];
        }
    }
    
    
    public static function hash($value): string
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }
    public static function verify($value, $hash): bool
    {
        return password_verify($value, $hash);
    }

    public static function imageUpload($imageRequest, $imagePath = "assets/images/"): string
    {
        global $msgError;
        $imagename  = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
        $imagetmp   = $_FILES[$imageRequest]['tmp_name'];
        $imagesize  = $_FILES[$imageRequest]['size'];
        $allowExt   = array("jpg", "png", "gif", "mp3", "pdf");
        $strToArray = explode(".", $imagename);
        $ext        = end($strToArray);
        $ext        = strtolower($ext);
        
        if (!empty($imagename) && !in_array($ext, $allowExt)) {
            $msgError = "EXT";
        }
        if ($imagesize > 2 * MB) {
            $msgError = "size";
        }
        if (empty($msgError)) {
            move_uploaded_file($imagetmp,  $imagePath . $imagename);
            return $imagename;
        } else {
            return "fail";
        }
    }
}
