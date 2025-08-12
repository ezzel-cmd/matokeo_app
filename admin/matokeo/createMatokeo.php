<?php 
include '../data.php';

$user = auth();

if(!$user){
    header("Location: /admin/login.php");
    exit;
}
// if ($user['role'] == 'admin'){
//     header("Location: /admin/matokeoList.php");
//     exit;
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>CreateMatokeo</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="h-screen w-full grid place-content-center bg-gray-200 ">
    <div class="raleway-font w-[90vw] md:w-[50vw] lg:w-[30vw] bg-white rounded-lg shadow-2xl p-10">
        <h1 class="text-center text-3xl font-bold">Create Matokeo</h1>
        <p class="text-center">Add Matokeo Data!</p>

        <form action="../controller.php?action=createMatokeo" method="post">
            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="muhula">Muhula</label>
                <select name="muhula" id="muhula" required class="p-2 border-2 border-gray-400 rounded-lg">
                    <option value="" disabled selected>Chagua Muhula</option>
                    <option value="muhula wa I">Muhula wa I</option>
                    <option value="muhula wa II">Muhula wa II</option>
                </select>
            </div>

            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="year">Year</label>
                <select name="year" id="year" class="p-2 border-2 border-gray-400 rounded-lg">
                    <option value="" disabled selected>Select Year</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                </select>
            </div>

            <div class="w-[70%] mx-auto">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 rounded-lg mt-5 w-full "
                    type="submit">Create</button>
            </div>
        </form>
    </div>
</body>

</html>