<?php
include '../data.php';

$user = auth();

if (!$user) {
    header("Location: /admin/login.php");
    exit;
}

if ($user['role'] !== 'admin') {
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
        <h1 class="text-center text-3xl font-bold">Create Student</h1>
        <p class="text-center">Add Student Data!</p>

        <form action="../controller.php?action=createStudent" method="post">
            <div class="flex flex-col w-[70%] mx-auto mt-10 space-y-2">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required class="p-2 border-2 border-gray-400 rounded-lg" placeholder="Enter Student Name">
            </div>

            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" required class="p-2 border-2 border-gray-400 rounded-lg">
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="mkondo">Mkondo</label>
                <select name="mkondo" id="mkondo" required class="p-2 border-2 border-gray-400 rounded-lg">
                    <option value="" disabled selected>Select Mkondo</option>
                    <option value="mkondoA">Mkondo A</option>
                    <option value="mkondoB">Mkondo B</option>
                    <option value="mkondoC">Mkondo C</option>
                </select>
            </div>

            <div class="w-[70%] mx-auto">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 rounded-lg mt-5 w-full ">Create</button>
            </div>
        </form>
    </div>
</body>

</html>