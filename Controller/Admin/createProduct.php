<?php

use Core\Validator;
use Model\Produit;

if(!isAdmin()){
    goToPage('/login');
}
$product = new Produit();

if($_SERVER['REQUEST_METHOD'] === 'POST'){


    // dd($_POST);
    $imagename = "";
    $image_dir = "";
    if (isset($_FILES['fileUpload']) ) {
        
        $imagename =  imageUpload('fileUpload',$image_dir);
        $image_dir = "assets/images/products/";
    }
    else{
        $imagename = post('image');
    }




    if($imagename == "error" || $imagename == "fail"){
        $imagename = $_POST['image'];
    }

    $product_name = post('product-name');
    $product_reference = post('product-reference');
    $prix_achate = post('prix-achate');
    $prix_final = post('prix-final');
    $prix_offere = post('prix-offere');
    $quntite = post('quntite');
    $description = post('description');
    $status = post('status');
    $code_barre = post('code-barre');
    
    // dd($imagename);
    if(Validator::string($product_name) && Validator::string($product_reference) && 
    Validator::string($prix_achate) && Validator::string($prix_final) && 
    Validator::string($prix_offere) && Validator::string($quntite) &&
    Validator::string($description) && Validator::string($status) && Validator::string($code_barre))
    {
        if(isset($_POST["Update"])){
            // dd($imagename);
            $product->updateProduit([
                'id' => get('id'),
                'nom' => $product_name,
                'reference' => $product_reference,
                'prix_achat' => $prix_achate,
                'prix_final' => $prix_final,
                'prix_offer' => $prix_offere,
                'quantite' => $quntite,
                'description' => $description,
                'image' => $image_dir.$imagename,
                'status' => $status,
                'code_barre' => $code_barre,
            ]);
            // echo "success";
            goToPage('/admin-products');
        }else{
            $product->insert([
                'nom' => $product_name,
                'reference' => $product_reference,
                'prix_achat' => $prix_achate,
                'prix_final' => $prix_final,
                'prix_offer' => $prix_offere,
                'quantite' => $quntite,
                'description' => $description,
                'image' => $image_dir.$imagename,
                'status' => $status,
                'code_barre' => $code_barre,
            ]);

        }
        
    }
    else{
        echo "error";
    }
    


}

if(get('id')){
    $product = $product->findByField('idProduit',get('id'));
    view('admin/createProduct.view.php', ['title' => 'Product','description' => 'Product','product' => $product]);
    die();
}

$emptyProduct = new Produit();
$product = $emptyProduct->getEmptyProduct();

$product = [
    $product
];

view('admin/createProduct.view.php', 
[
'title' => 'Admin Eelectro Maroc',
'description' => 'This is the Admin Dashboard' ,
'product' => $product


]); ?>


