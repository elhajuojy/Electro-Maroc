
<?php
// Path: Controller\order.php


use Model\Cart;
use Model\Commande;
use Model\Produit;
use Model\Produit_Commande;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //todo: check if user is logged in
    $data = [];
    if (isset($_POST['confirmOrder'])) {
        $idUser = $_SESSION['id'];

        //todo : get all products in cart for this user
        //todo : get all products in cart for this user and is not bought

        $cart = new Cart();
        $cart = $cart->findByFileds(['idUser' => $idUser, 'bought' => 0]);
        if (!$cart) {
            $data = [
                'message' => 'Votre panier est vide',
                'total' => 0
            ];
            echo json_encode($data);
            die();
        }
        $total = 0;
        //todo : create commande 
        //todo get user id and get client which have the same email as the user 
        //todo : create commande

        $commande = new Commande();
        $commande->insertCommande([
            'dateCommande' => date('Y-m-d'),
            'dateLivraison' => date('Y-m-d'),
            'dateDenvoi' => date('Y-m-d'),
            'iduser' => $idUser,
            'status' => 'en cours'
        ]);

        //todo : get last commande id
        $commande = new Commande();
        $commande = $commande->getThisCommandeId($idUser);
        $idCommande = $commande[count($commande)-1]['idCommande'];

        //todo : join cart with product to get price
        foreach ($cart as $c) {
            $product = new Produit();
            $product = $product->findByFileds([
                'idProduit' => $c->idProduit
            ]);
            //todo : count total
            $prix = $product[0]->prix_final;
            $quantite = $c->quantite;
            $total += $prix * $quantite;
            //todo : update bought to 1
            $cart = new Cart();
            $cart->updateBought($idUser, $c->idProduit);
            //todo : update quantity in stock
            $product = new Produit();
            $product->updateQuantity($c->idProduit, $quantite);

            //todo : create produit_commande
            $produit_commande = new Produit_Commande();
            $produit_commande->insertProduitCommande([
                'idProduit' => $c->idProduit,
                'idCommande' => $idCommande,
                'quantite' => $quantite
            ]);
        }
        $data = [
            'message' => 'Votre commande a été bien enregistrée',
            'total' => $total
        ];
        echo json_encode($data);

    }
}
