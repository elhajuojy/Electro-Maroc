<?php 
// Path: Controller\register.php
use Model\Client;
use Model\User;
use Model\Users;

if(isset($_POST['register'])){

    // echo 'register';
    // dd($_POST);
    $client = new Client();
    $client->nom_complet = $_POST['nom_complet'];
    $client->email = $_POST['email'];
    $client->telephone = $_POST['telephone'];
    $client->adresse = $_POST['adresse'];
    $client->ville = $_POST['ville'];
    
    $user = new Users();
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->password = hashPassword($_POST['password']);
    $user->role = 'client';

    $user->insert([
        'username' => $user->username,
        'email' => $user->email,
        'password' => $user->password,
        'role' => $user->role
    ]);


    $client->insert([
        'nom_complet' => $client->nom_complet,
        'email' => $client->email,
        'telephone' => $client->telephone,
        'adresse' => $client->adresse,
        'ville' => $client->ville,
        'codePostal' => '46000',
        'pays' => 'morocco'
    ]);
    header('Location: /login');
}

view('register.view.php', ['title' => 'Register','description' => 'Register']);

