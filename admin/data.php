<?php

session_start();

function db()
{
    $host = "localhost";
    $user = "root";
    $pass = "password";
    $database = "matokeo";
    $db = null;
    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $db;
}

$db = db();

function auth()
{
    if (!isset($_SESSION['user'])) {
        return false;
    }

    $userId = $_SESSION['user'];

    // get User Data
    $db = db();
    $sql = "SELECT name, email, role FROM users WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute([':id' => $userId]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users[0];
}

// if ($db) {
//     $sql = "SELECT id, email FROM users WHERE email = :email";
//     $stmt = $db->prepare($sql);
//     $stmt->execute([':email' => 'josh@gmail.com']);
//     $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     print_r($users);

//     // insert
//     $sql = "INSERT INTO users ( email, password) VALUES (:email, :password)";
//     $stmt = $db->prepare($sql);

//     try {
//         $exc = $stmt->execute([':email' => 'jux@gmail.com', ':password' => '1234']);
//     } catch (PDOException $e) {
//         echo "Error: " . $e->getMessage();
//     }
// }
