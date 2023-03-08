<?php

use Model\Commande;

if($_GET['id']){
    $id = $_GET['id'];
    $stats = $_GET['status'];

    $commande = new Commande();


    $commande->updateCommandeStatus($id,$stats);


    header("location : /admin-orders");
}
