<?php 

if(!isAdmin()){
    goToPage('/login');
}

use Model\Produit;

$products = new Produit();



if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(post('delete')){
        // $products->delete(post('delete'));
        goToPage('/admin-products');
    }

    if(isset($_POST['id']) && isset($_POST['status'])){
        $id = post('id');
        $status = post('status');

        $products->updateStatus($id, $status);
        echo json_encode(['status' => 'success']);
        die();
    }
    
}



$products = $products->findAll();
// updateStatus 


// dd($products);

view('admin/products.view.php', ['title' => 'Admin Eelectro Maroc',
'description' => 'This is the Admin Dashboard ',
'products' => $products
]); ?>


