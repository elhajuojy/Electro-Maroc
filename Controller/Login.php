
<?php

use Model\Client;
use Core\Validator;

use Model\Users;

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];



    if (!Validator::string($username, 3, 20)) {
        $errors["username"] = 'Invalid username';
    }
    if (!Validator::string($password, 3, 20)) {
        $errors["password"] = 'Invalid password';

        view(
            'login.view.php',
            [
                'name' => 'Login',
                'errors' => $errors
            ]
        );
        die();
    }

    $User = new Users();
    $user = $User->findByUsername($username);
    $User = $User->findByUsername($username);

    $client = new Client();
    $client = $client->findByEmail($user->email);

    // if($User->role == "admin"){
    //todo:    go to the admin dashboard and die here
    // }

    if ($User) {
        $password  = $User->password;
        if ($password == $User->password) {
            $_SESSION['client'] = $User->username;
            $_SESSION['role'] = $User->role;
            header('Location: /');
        }
    }
}


view(
    'login.view.php',
    [
        'title' => 'Login',
        'description' => 'Login',
        'name' => 'Login',
        'errors' => $errors
    ]
);

