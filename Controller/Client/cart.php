
<?php
if(!isLogedIn()){
    goToPage('/login');
}

use Model\Cart;
use Model\Produit;

$products = [];

$cart = new Cart();
$totalOrder = 0;
$cart = $cart->findByFileds(['idUser' => $_SESSION['id'], 'bought' => '0']);

foreach($cart as $c){
    $product = new Produit();
    $product = $product->findByField('idProduit', $c->idProduit);
    $products[] = $product;
}


for($i = 0; $i < count($products); $i++){
    $totalOrder += $products[$i][0]->prix_final * $cart[$i]->quantite;
}



if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['addToCart'])){

        $cart = new Cart();
        $idUser = $_SESSION['id'];
        
        $cart = new Cart();        
        $cart =  $cart->findByFileds(['idUser' => $_SESSION['id'], 'idProduit' => $_POST['idProduit' ], 'bought' => 0]);
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

    
    if(isset($_POST['removeFromCart'])){
        //todo remove product from cart
        $cart = new Cart();
        $cart->deleteFromCart($_SESSION['id'], $_POST['idProduit']);
        // redirct meto cart page;
        goToPage('/cart');
        die();
    }

    if(isset($_POST['updateCart'])){
        //todo update product from cart
        $cart = new Cart();
        $cart->updateCart($_SESSION['id'], $_POST['idProduit'], intval($_POST['quantite']));
        // redirct meto cart page;
        goToPage('/cart');
        die();
    }
    
    
}





view('Client/cart.view.php', [
        'title' => 'Client Eelectro Maroc',
    'description' => 'This is the Client ',
    'products'=>$products,
    'cart' => $cart,
    'totalOrder' => $totalOrder
    ]);
    die();




