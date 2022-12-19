<?php

use Core\functions;
use Model\Client;
use Model\Users;

$user = new Users();
$user->logOut();


functions::goToPage('/');