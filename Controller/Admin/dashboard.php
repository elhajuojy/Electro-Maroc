<?php 

use Model\Commande;

if(!isAdmin()){
    goToPage('/login');
}

$commande = new Commande();

$commandes = $commande->getInvoices();




view('Admin/dashboard.view.php', ['title' => 'Dashboard','description' => 'Dashboard',
'commandes' => $commandes
]);


