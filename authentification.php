<?php
require_once ("./config.inc.php");
session_start();
$auth = new Auth();


try {
    $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);
} catch (PDOException $e){
    echo "Verbindung fehlgeschlagen!";
    die();
}

if(isset($_POST['login'])){
    $_SESSION['loggedin'] = false;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $auth = new Auth();

    $darfrein = $auth->login($username,$password);

    if($darfrein){
        $_SESSION['loggedin'] = true;
        header("Location: BlogEditor.php");
    } else {
        $_SESSION['loggedin'] = false;
        header("Location: login.php?error=1");
    }
}


if(isset($_POST['register'])) {
    $username = $_POST['newUser'];
    $password = $_POST['newPassword'];
    $password2 = $_POST['confirmPassword'];

    if ($password == $password2) {
        $register = $auth->register($username, $password, $password2);
        if ($register) {
            header("Location: index.php?error=0");
        }
    } else {
        header("Location: index.php?error=1");
    }

}