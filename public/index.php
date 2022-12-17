<?php

use Core\App;
use Model\notes;
use Model\Client;


session_start();
const BASE_PATH = __DIR__.'/../';
require_once BASE_PATH.'vendor/autoload.php';
require BASE_PATH.'functions.php';

// Load environment variables from .env file in root directory
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->safeload();

// Load database configuration from config.php file
$config = require BASE_PATH.'config.php';
//get the instance of the app
$App = App::getInstance();
//set the database configuration
$App->setDatabase( dbConfig:   $config['database']);



//some test code to test the database connection and the model class
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


$client = new Client();

//$client->add('mohamed','11@gmail.com','123456','mohamed ali',123456,'cairo 1123 event',city: 'cairo');



//set the routes
$App->setRoutes([
    '/' => 'Controller/index.php',
    '/about' => 'Controller/about.php',
    '/notes' => 'Controller/notes/index.php',
    '/note' => 'Controller/notes/show.php',
    '/notes/create' => 'Controller/notes/create.php',
    '/contact' => 'Controller/contact.php',
],BASE_PATH);


//run the app
$App->run();
