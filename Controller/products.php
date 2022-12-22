
<?php 
// Path: Controller\products.php


if($_SERVER['REQUEST_METHOD'] === 'GET'){
    // $products = new Products();
    // $products = $products->all();
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){

}

view('products.view.php', ['title' => 'Porducts','description' => 'Products']);