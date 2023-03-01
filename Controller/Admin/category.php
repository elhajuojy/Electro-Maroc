
<?php

use Model\Categorie;

if(!isAdmin()){
    goToPage('/login');
}




if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['addCategory'])){

    $category = new Categorie();


        $category->insert(
            [
                'nom' => $_POST['nom'],
                'description' => $_POST['description'],
            ]
        );

        goToPage('/admin-cateogry');

    }
    if(isset($_POST['updateCategory'])){
        $category = new Categorie();
        $category->updateCategorieById($_POST['id'], $_POST['nom'], $_POST['description']);
        goToPage('/admin-cateogry');
    }

    if(isset($_POST['deleteCategory'])){
        $category = new Categorie();
        $category->removeCategorieById($_POST['idCategorie']);
    }

}

$updatedCategory = null;

if(isset($_GET['id'])){
    $updatedCategory = (new Categorie())->getCategorieById($_GET['id']);
}

$category = new Categorie();
$category = $category->getCategories();




view('Admin/category.view.php', [
'title' => 'Dashboard','description' => 'Dashboard',
'categories' => $category,
'id' => $_GET['id'] ?? null,
'updatedCategory' => $updatedCategory



]);