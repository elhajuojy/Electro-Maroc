<?php

use Core\App;
use Core\functions;
use Model\notes;

session_start();
const BASE_PATH = __DIR__.'/../';
require_once BASE_PATH.'vendor/autoload.php';
require BASE_PATH.'functions.php';


$config = require BASE_PATH.'config.php';

$App = App::getInstance();
$App->setDatabase( dbConfig:   $config['database']);





$notes = new notes();
// functions::dd(  $notes->findAll() );


// $note->insert([
//     'body' => 'hello',
//     'user_id' => 1

// ]);

// $notes->removeById(8);
// $notes->removeById(9);

// $notes->update(4,[
//     'body' => 'working on it ... thank you',
//     'user_id' => 1
// ]);


//$password = hashPassword('123456');
//$verify = verifyPassword('123456',$password);

//echo $password;
//echo "<br>";
//echo $verify;

// dd("");



$App->setRoutes([
    '/' => 'Controller/index.php',
    '/about' => 'Controller/about.php',
    '/notes' => 'Controller/notes/index.php',
    '/note' => 'Controller/notes/show.php',
    '/notes/create' => 'Controller/notes/create.php',
    '/contact' => 'Controller/contact.php',
],BASE_PATH);


$App->run();
