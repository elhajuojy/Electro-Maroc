<?php

use Core\App;
use Model\Client;


session_start();
const BASE_PATH = __DIR__.'/../';
require_once BASE_PATH.'vendor/autoload.php';
require BASE_PATH.'functions.php';
require BASE_PATH.'Helper/constants/colors.php';


// Load environment variables from .env file in root directory
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->safeload();

// Load database configuration from config.php file
$config = require BASE_PATH.'config.php';
//get the instance of the app
$App = App::getInstance();
//set the database configuration
$App->setDatabase( dbConfig:   $config['database']);


// $client = new Client();
// $client->logOut();
// echo $_SESSION['client'];j

//$client->add('mohamed','11@gmail.com','123456','mohamed ali',123456,'cairo 1123 event',city: 'cairo');

//set the routes
$App->setRoutes([
    '/' => 'Controller/index.php',
    '/login' => 'Controller/login.php',
    '/logout' => 'Controller/logout.php',
    '/register' => 'Controller/register.php',
    '/products' => 'Controller/products.php',
    '/admin' => 'Controller/Admin/dashboard.php',
    '/cart' => 'Controller/Client/cart.php',
    '/admin-products' => 'Controller/Admin/products.php',
    '/admin-createProduct' => 'Controller/Admin/createProduct.php',
    '/admin-users' => 'Controller/Admin/users.php',
    '/uploadImage'=>'Controller/uploadImage.php',
    '/order'=> 'Controller/order.php',
    '/admin-orders' => 'Controller/Admin/orders.php',
    '/admin-cateogry' => 'Controller/Admin/category.php',
    "/order-info"=>'Controller/Admin/orderInfo.php',
    "/profile"=>'Controller/Client/profile.php',
    "/changeOrderStatus"=>'Controller/Admin/changeOrderStatus.php',
],BASE_PATH);


// echo $_SESSION['role']??'not set';

//run the app
$App->run();
