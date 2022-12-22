
<?php 
// Path: Controller\products.php


if($_SERVER['REQUEST_METHOD'] === 'GET'){

    if(get('id')){
        view('productDetails.view.php', ['title' => 'Product','description' => 'Product','product' => get('id')]);
        die();
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){

}

view('products.view.php', ['title' => 'Porducts','description' => 'Products']);