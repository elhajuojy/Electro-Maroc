<?php

namespace  Model;
use Model\Users;

class  Admin extends Users {


    public function __construct($username, $email, $password)
    {
        parent::__construct($username, $email, $password, get_class($this));
    }


}
