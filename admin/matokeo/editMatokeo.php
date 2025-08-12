<?php

include '../data.php';
$user = auth();
if (!$user) {
    header("Location: ../admin/login.php");
    exit;
}

if ($user['role'] !== 'admin') {  
    header("Location: ../admin/index.php"); 
    exit;
}

//fetching data

    if (isset($_GET['id'])) { 
        $matokeoId = intval($_GET['id']);
        $sql = "SELECT * FROM creatematokeo WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute([':id' => $matokeoId]);  
        $matokeo = $stmt->fetch(PDO::FETCH_ASSOC);
    } 
    else {
            header("Location: matokeoList.php");
            exit;
        }
        
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
        font-style: bold;
    }
    </style>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Edit Matokeo</title>
</head>

<body class="h-screen w-full  bg-gray-200 grid place-content-center ">
    <div class="raleway-font w-[80vw] md:w-[60vw] lg:w-[40vw]   bg-white rounded-lg shadow-2xl p-10">
        <h1 class="text-center text-3xl font-bold">Update Matokeo</h1>
        <!-- <p class="text-center">Add Matokeo Data!</p> -->

        <form action="../controller.php?action=updateMatokeo" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($matokeo['id'] ?? ''); ?>">
            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="muhula">Muhula</label>
                <select name="muhula" id="muhula" required class="p-2 border-2 border-gray-400 rounded-lg">
                    <option value="" disabled selected>Chagua Muhula</option>
                    <?php $currentMuhula = $matokeo['muhula'] ?? ''; ?>
                    <option value="muhula wa I" <?php echo ($currentMuhula === 'muhulaI') ? 'selected' : '' ?>>
                        Muhula wa I
                    </option>
                    <option value="muhula wa II" <?php echo ($currentMuhula === 'muhulaII') ? 'selected' : '' ?>>Muhula
                        wa II
                    </option>
                </select>
            </div>

            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="year">Year</label>
                <select name="year" id="year" class="p-2 border-2 border-gray-400 rounded-lg">
                    <?php $currentYear = $matokeo['year'] ?? ''; ?>
                    <option value="" disabled selected>Select Year</option>
                    <option value="2020" <?php echo ($currentYear === '2020') ? 'selected' : ''; ?>>2020
                    </option>
                    <option value="2021" <?php echo ($currentYear === '2021') ? 'selected' : ''; ?>>2021
                    </option>
                    <option value="2022" <?php echo ($currentYear === '2022') ? 'selected' : ''; ?>>2022
                    </option>
                    <option value="2023" <?php echo ($currentYear === '2023') ? 'selected' : ''; ?>>2023
                    </option>
                    <option value="2024" <?php echo ($currentYear === '2024') ? 'selected' : ''; ?>>2024
                    </option>
                    <option value="2025" <?php echo ($currentYear === '2025') ? 'selected' : ''; ?>>2025
                    </option>
                    <option value="2026" <?php echo ($currentYear === '2026') ? 'selected' : ''; ?>>2026
                    </option>
                    <option value="2027" <?php echo ($currentYear === '2027') ? 'selected' : ''; ?>>2027
                    </option>
                </select>
            </div>

            <div class="w-[70%] mx-auto">

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 rounded-lg mt-5 w-full "
                    type="submit">Update</button>

            </div>
        </form>
    </div>
</body>

</html>