<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: /admin/dashboard.php");
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

<body class="h-screen w-full grid place-content-center bg-gray-200 ">
    <div class=" w-[90vw] md:w-[50vw] lg:w-[30vw] bg-white rounded-lg shadow-2xl p-10">
        <h1 class="text-center text-3xl font-bold">Login Here</h1>
        <p class="text-center">hapa kama sio Admin Usiguse!</p>

        <form action="/admin/controller.php?action=login" method="post">
            <div class="flex flex-col w-[70%] mx-auto mt-10 space-y-2">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required class="p-2 border-2 border-gray-400 rounded-lg" placeholder="Enter Your Email">
            </div>

            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required class="p-2 border-2 border-gray-400 rounded-lg" placeholder="******">
            </div>

            <div class="w-[70%] mx-auto">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 rounded-lg mt-5 w-full ">Login</button>
            </div>
        </form>
    </div>
</body>

</html>