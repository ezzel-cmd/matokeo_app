<?php

include '../data.php';

if(!$user || $user['role'] !== 'admin'){
    header("Location: ../login.php");
}

if(isset($_GET['id'])){
    $student = intval($_GET['id']);

    if($db) {
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute([':id' => $student]);
    }
}

header("Location: studentsList.php");
exit;

?>