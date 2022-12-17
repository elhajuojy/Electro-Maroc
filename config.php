<?php

return [
    'database' => [
        'host' => $_ENV['DB_HOST'],
        'port' =>  $_ENV['DB_PORT'],
        'dbname' =>$_ENV['DB_NAME'],
        'charset' => $_ENV['DB_CHARSET'],
    ],
    //
];