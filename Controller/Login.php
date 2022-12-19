
<?php

use Model\Client;
use Core\Validator;

use Model\Users;

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $User = new Users();
    $user = $User->findByUsername($username);
    $User = $User->findByUsername($username);

    $client = new Client();
    $client = $client->findByEmail($user->email);

    // dd($User);

    if($User->role == "admin"){
        // dd($User);
        echo "admin";
    }else{
        echo "not admin";
    }

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
    
    if ($User) {
        $password  = $User->password;
        // verifyPassword($password, $client->password);
        if ($password == $User->password) {
            $_SESSION['client'] = $User->username;
            $_SESSION['role'] = $User->role;
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


