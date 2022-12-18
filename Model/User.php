<?php

namespace Model;

use Core\Model;

Abstract class User extends  Model
{
    public int $id;
    public  string $username;
    public  string $email;
    public  string $password;


    public function __construct(string $classname)
    {
        parent::__construct($classname);
    }

    public function login(string $username, string $password): bool
    {
        $user = $this->findByUsername($username);
        if ($user) {
            hashPassword($password);
            if (password_verify($password, $user->password)) {
                $_SESSION['user'] = $user;
                return true;
            }
        }
        return false;
    }
    
    public function logOut():void{
        session_start();
        session_unset();
        session_destroy();

    }



}