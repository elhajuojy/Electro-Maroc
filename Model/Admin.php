<?php

namespace  Model;


class  Admin extends User {


    public function __construct($username, $email, $password)
    {
        parent::__construct($username, $email, $password, get_class($this));
    }


}
