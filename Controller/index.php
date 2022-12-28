<?php

use Model\Produit;
// $products = new Products();

$products = new Produit();


$products = $products->getFive();





view('home.view.php', ['name' => 'Mehdi','products' => $products]);