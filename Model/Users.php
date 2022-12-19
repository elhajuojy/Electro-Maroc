<?php

namespace Model;

use Core\Model;

class Users extends  Model
{
    public int $id;
    public  string $username;
    public  string $email;
    public  string $password;
    public  string $role;
    public function __construct()
    {
        parent::__construct(get_class($this));
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
        session_unset();
        session_destroy();

    }



}