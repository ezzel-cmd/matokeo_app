<?php

include '../data.php';

if(!$user || $user['role'] !== 'admin'){
    header("Location: ../login.php");
}

if(isset($_GET['id'])){
    $matokeo = intval($_GET['id']);

    if($db) {
        $sql = "DELETE FROM creatematokeo WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute([':id' => $matokeo]);
    }
}

header("Location: matokeoList.php");
exit;

?>