
<?php

use core\Database;
use Model\Commande;
use Model\Commande_info;

if(!isAdmin()){
    goToPage('/login');
}

$orders = (new Commande())->getAll();

$orders_info  = new Commande_info();




if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $stats = $_GET['status'];

    $commande = new Commande();


    $commande->updateCommandeStatus($id,$stats);


    header("location : /admin-orders");
    
}

// dd($orders_info->getCommandeInfoAndCommandeProduct());


view('admin/orders.view.php', ['title' => 'Admin Eelectro Maroc','description' => 'This is the Admin Dashboard ',
'orders_info'=>$orders_info->getCommandAndInfo()
]); ?>


