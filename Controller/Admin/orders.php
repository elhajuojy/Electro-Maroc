
<?php

use Model\Commande;

if(!isAdmin()){
    goToPage('/login');
}

$orders = (new Commande())->getAll();

view('admin/orders.view.php', ['title' => 'Admin Eelectro Maroc','description' => 'This is the Admin Dashboard ',
'orders'=>$orders
]); ?>


