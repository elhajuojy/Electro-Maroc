
<?php 

use Model\Client;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $client = new Client();
    $client = $client->findByUsername($username);

    if($client) {
        $password  = $client->password;
        // verifyPassword($password, $client->password);
        if($password == $client->password) {
            $_SESSION['client'] = $client->username;
            header('Location: /');
        } else {
            $error = 'Invalid password';
        }
    } else {
        $error = 'Invalid email';
    }
}


view('login.view.php', ['name' => 'Login']);