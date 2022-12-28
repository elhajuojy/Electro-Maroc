
<?php 
// Path: Controller\products.php
use Model\Products;
use Model\Produit;
use Model\Categorie;


    
$Category = new Categorie();
$produit = new Produit();

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $Category = $Category->getCategories();
    if(get('id')){

        $produit = $produit->findByField('idProduit',get('id'));
        view('productDetails.view.php', ['title' => 'Product','description' => 'Product','product' => $produit]);
        die();
    }

    if(get('nomCategory')){
        $produit = $produit->getProductsByCategory(get('nomCategory'));

        view('products.view.php', ['title' => 'Products','description' => 'Products','products' => $produit,'categories' => $Category]);
        die();
    }


    
    // $produit = $produit->getAllWithCategory();
    $produit = $produit->getActive();


    // dd($produit);

}
if($_SERVER['REQUEST_METHOD'] === 'POST'){

}





view('products.view.php', 
[

'title' => 'Porducts',
'description' => 'Products',
'categories' => $Category
,'products' => $produit



]);


