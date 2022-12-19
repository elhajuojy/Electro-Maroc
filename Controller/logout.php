<?php

use Core\functions;
use Model\Client;



$client = new Client();
$client->logOut();


functions::goToPage('/');