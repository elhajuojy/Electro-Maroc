
<?php

use Model\Cart;
use Model\Produit;

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    //todo get all products in cart for this user
    $cart = new Cart();
    $cart = $cart->findByFileds(['idUser' => $_SESSION['id']]);
    // dd($cart);
    $products = [];
    foreach($cart as $c){
        $product = new Produit();
        $product = $product->findByField('idProduit', $c->idProduit);
        // $product->quantity = $c->quantite;
        $products[] = $product;
    }
    
    view('Client/cart.view.php', [
        'title' => 'Client Eelectro Maroc',
    'description' => 'This is the Client ',
    'products'=>$products
    ]);

    die();
    dd($products);



}



if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['addToCart'])){

        
        //todo check if product already in cart        
        //todo update quantity if product already in cart
        //todo create new cart if product not in cart
        //todo update bought to 0 if product not in cart

        $cart = new Cart();
        $idUser = $_SESSION['id'];
        
        $cart = new Cart();        
        $cart =  $cart->findByFileds(['idUser' => $_SESSION['id'], 'idProduit' => $_POST['idProduit']]);
        $messg = "";
        if($cart){
            $cart1 = new Cart();
            $cart1->updateCart($idUser, $_POST['idProduit'], $_POST['quantity']);
            $messg = "Update cart";
        }else{
            $cart = new Cart();
            $cart->insert(
                [
                    'idUser' => $idUser,
                    'idProduit' => $_POST['idProduit'],
                    'quantite' => $_POST['quantity'],
                    'bought' => 0
                ]
            );
            $messg=  "Added to cart";
        }

        echo $messg;
        die();
    }
    
    
    
}


view('Client/cart.view.php', ['title' => 'Client Eelectro Maroc','description' => 'This is the Client ']);
?>


