<?php

session_start();

$action = '';
if(!empty ($_GET['action']) ) {
    $action = $_GET['action'];
}
else {
    echo 'action not found';
    exit;
}

switch($action) {
    case 'login':
        login();
        break;
    case 'logout';
        logout();
        break;
    default:
        echo 'action not found';
        exit;
}

function login() {
    $email = '';
    $password = '';
    
    if(!empty($_POST['email'])){
        $email = ($_POST['email']);
    }
    else{
        echo 'email not found';
    }
    
    if(!empty($_POST['password'])){
        $password = ($_POST['password']);
    }
    else{
        echo 'password not found';
    }
}

