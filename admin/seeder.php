<?php

include 'data.php';

// create Admin Account
if($db){
    $hash = password_hash('4321', PASSWORD_DEFAULT);
    $name = 'Juliana Emiliano';
    $email = 'ju@gmail.com';
    $role = 'admin';
    $sql = "INSERT INTO users ( name, email, password, role) VALUES ('$name','$email', '$hash', '$role')";
    $stmt = $db->prepare($sql);
    try {
        $exc = $stmt->execute();   
        echo "Admin Account Created Successfully"; 
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}else{
    echo "Database Connection Failed";
}

var_dump($db);