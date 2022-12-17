<?php

use Core\App;
use Core\functions;
use Model\notes;

session_start();
const BASE_PATH = __DIR__.'/../';
require_once BASE_PATH.'vendor/autoload.php';


$config = require BASE_PATH.'config.php';

$App = App::getInstance();
$App->setDatabase( dbConfig:   $config['database']);


$notes = new notes();



functions::dd(  $notes->findAll() );


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



$App->setRoutes([
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/notes/create' => 'controllers/notes/create.php',
    '/contact' => 'controllers/contact.php',
],BASE_PATH);


$App->run();
