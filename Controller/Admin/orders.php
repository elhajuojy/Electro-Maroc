
<?php 


if(!isAdmin()){
    goToPage('/login');
}


view('admin/orders.view.php', ['title' => 'Admin Eelectro Maroc','description' => 'This is the Admin Dashboard ']); ?>


