<?php
include 'data.php';
$user = auth();
if(!$user){
    header("Location: /admin/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <div class="w-full bg-blue-500 text-white p-4 flex justify-between items-center">
        <div class="">
            <h1 class="text-2xl font-bold">MATOKEO PANEL</h1>
        </div>
        <div class="flex gap-4 text-lg">
            <a href="/" class="">Home</a>
            <a href="/admin/students.php" class="">Students</a>
            <a href="/admin/matokeo.php" class="">Matokeo</a>
        </div>
        <div class=" flex gap-4 items-center">
            <h1 class="text-xl"><?= $user['name'] ?? $user['email'] ?></h1>
            <a href="/admin/controller.php?action=logout" class="bg-white hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Logout</a>
        </div>
    </div>
    <h1 class="">Dashboard</h1>
</body>

</html>