<?php
session_start();
include 'data.php';

$action = '';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    echo "action not found";
    exit;
}

switch ($action) {
    case 'login':
        login();
        break;
    case 'logout':
        logout();
        break;
    default:
        echo "action not found";
        exit;
}

function login()
{
    $email = '';
    $password = '';
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        echo "email not found";
        exit;
    }
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        echo "password not found";
        exit;
    }


    $credentials = users();

    $userData = [];

    // find User By Email
    foreach ($credentials as $index => $user) {
        if ($user['email'] == $email) {
            $userData = $user;
            $userData['id'] = $index;
            break;
        }
    }
    
    // verify password

    if (empty($userData)) {
        echo "Invalid Email";
        exit;
    }

    if ($userData['password'] !== $password) {
        echo "Invalid Password";
        exit;
    }

    $_SESSION['user'] = $userData['id'];
    header("Location: /admin/dashboard.php");
    
}

function logout()
{
    session_unset();
    session_destroy();
    header("Location: /admin/login.php");
}
