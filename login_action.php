<?php

require_once './config.php';
require_once './models/Auth.php';
$profile = '';

$login = filter_input(INPUT_POST, 'login');
$password = filter_input(INPUT_POST, 'password');


$auth = new Auth($pdo, $base);


if ($auth->validateLogin($login, $password)) { //
    $profile = $auth->validateProfile($login);
    if($profile == 'comum') { 
        header("Location: ./comum.html ");
        exit;
    }if($profile == 'admin') {
        header("Location: ./administrador.html");
        exit;
     }else{
       
     }
 }else{
    $_SESSION['flash'] = 'Login e/ou senha incorretos.';
    header("Location: ./login.php");
    exit;
    
 }