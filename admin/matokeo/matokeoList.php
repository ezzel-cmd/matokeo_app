<?php
include '../data.php';
$user = auth();
if (!$user) {
    header("Location: ../admin/login.php");
    exit;
}

// if ($user['role'] !== 'admin') {
//     header("Location: ../admin/dashboard.php"); 
//     exit;
// }

if ($db) {  
    $sql = "SELECT id, muhula, year FROM creatematokeo";        
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Exo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <style>
    .raleway-font {
        font-family: "Raleway", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
    }
    </style>
    <title>List ya Matokeo</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="raleway-font w-full h-screen flex bg-blue-100 flex-col">

    <body class="w-full h-screen flex bg-blue-100 flex-col">

        <!-- header -->

        <header class="bg-white shadow-md py-4 px-10 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <button id="menu-toggle"
                    class="text-2xl flex justify-center items-center p-2 rounded-lg hover:bg-gray-100 transition">
                    <i class="fi fi-br-menu-burger "></i>
                </button>

                <h1 class="text-xl font-extrabold text-blue-600">matokeoApp</h1>
            </div>
            <div class="hidden md:flex gap-4 text-blue-600">
                <i class="fi fi-brands-facebook"></i>
                <i class="fi fi-brands-youtube"></i>
                <i class="fi fi-brands-linkedin"></i>
                <i class="fi fi-brands-instagram"></i>
            </div>
        </header>


        <!-- Sidebar (hidden by default) -->
        <div id="sidebar"
            class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg px-7 flex flex-col justify-between py-8 transform -translate-x-full transition-transform duration-300 z-50">
            <h1 class="text-xl p-2 font-extrabold text-gray-800">matokeoApp</h1>
            <nav class="flex flex-col gap-5">
                <a href="../../index.php" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-home text-blue-500"></i> Home
                </a>
                <a href="../dashboard.php" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-apps text-blue-500"></i> Dashboard
                </a>
                <a href="../students/studentsList.php" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-users-alt text-blue-500"></i> Students
                </a>
                <a href=".#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-edit text-blue-500"></i> Results
                </a>
                <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-comment-alt text-blue-500"></i> Community
                </a>
                <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-user-gear text-blue-500"></i> Settings
            </nav>
            </a>
            <a href="../controller.php?action=logout" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                <i class="fi fi-sr-user-logout text-blue-500"></i> Logout
            </a>
        </div>


        <!-- Matokeo -->
        <div class="w-full h-auto">
            <div class="w-[90vw] mx-auto my-5 bg-white rounded-lg shadow-2xl p-10">
                <div class=" grid place-content-start space-y-4 md:flex md:justify-between">
                    <div class="flex-col gap-4">
                        <h1 class="text-start text-3xl font-bold">Matokeo</h1>
                        <p class="text-start">List ya Mihula ya Matokeo</p>
                    </div>

                    <div class="grid place-content-start md:place-content-center">
                        <a href="./createMatokeo.php"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Create New
                            Matokeo</a>
                    </div>
                </div>

                <!-- This wrapper makes the table horizontally scrollable on small screens -->
                <div class="overflow-x-auto">
                    <table class="w-full text-start mt-5 table-fixed border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="p-4 text-start w-16">Id</th>
                                <th class="p-4 text-start w-48">Muhula</th>
                                <th class="p-4 text-start w-24">Year</th>
                                <th class="p-4 text-start w-40">Action</th>
                            </tr>
                        </thead>

                        <tbody class="bg-gray-200 border-t border-gray-400 text-start">
                            <?php foreach ($results as $matokeo) : ?>
                            <tr class="border-b border-gray-300">
                                <td class="p-4"><?= $matokeo['id'] ?></td>
                                <td class="p-4"><?= $matokeo['muhula'] ?></td>
                                <td class="p-4"><?= $matokeo['year'] ?></td>
                                <td class="p-4 flex gap-2">
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm whitespace-nowrap"
                                        href="editMatokeo.php?id=<?= $matokeo['id'] ?>">Edit</a>

                                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-sm whitespace-nowrap"
                                        href="deleteMatokeo.php?id=<?= $matokeo['id'] ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <!-- overlay(click to close) -->
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40"></div>

        <footer class="bg-gradient-to-bl from-blue-500 to-blue-700 text-white text-center p-4">
            <p>Copyright &copy; 2025</p>
        </footer>


    </body>
    <script>
    const toggleBtn = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
    </script>

</html>