<?php 

use Model\commande_info;


if(!isAdmin()){
    goToPage('/login');
}

if(isset($_GET['id'])){
    $order_info = (new commande_info())->getOneCommandeInfo($_GET['id']);

    
    // quntite in commande_produit * prix_final  in produit
    // total order = sum of all quntite in commande_produit * prix_final  in produit
    

    view('admin/orderInfo.view.php', ['title' => 'Admin Eelectro Maroc','description' =>    'This is the Admin Dashboard ','orders_info'=>$order_info,
    'total_order'=>0
    ]);
    
}



?>