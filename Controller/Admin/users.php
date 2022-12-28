
<?php

use Model\Client;
use Model\Users;

if(!isAdmin()){
    goToPage('/login');
}

$Clients = new Client();
// $client = new Client();

// dd($client->findAll());


$Clients = $Clients->findAll();

// dd($Clients);


view('admin/users.view.php',
['title' => 'Users Eelectro Maroc','description' => 'This is the Admin Dashboard ',
'clients' => $Clients
]); ?>


