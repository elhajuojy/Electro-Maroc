
<?php

use Model\Client;
use Core\Validator;

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $client = new Client();
    $client = $client->findByUsername($username);

    if (!Validator::string($username, 3, 20)) {

        $errors["username"] = 'Invalid username';
        // dd($errors);
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
    
    if ($client) {
        $password  = $client->password;
        // verifyPassword($password, $client->password);
        if ($password == $client->password) {
            $_SESSION['client'] = $client->username;
            header('Location: /');
        } else {
            $error = 'Invalid password';
        }
    } else {
        $error = 'Invalid username';
    }
}


view(
    'login.view.php',
    [
        'name' => 'Login',
        'errors' => $errors
    ]
);


