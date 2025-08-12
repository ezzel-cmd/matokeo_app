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
        $studentId = $_GET['id'];
        $sql = "SELECT * FROM students WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute([':id' => $studentId]);  
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
      
    } 
    else {
            header("Location: studentsList.php");
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
    <title>Edit Student</title>
</head>

<body class="raleway-font h-screen w-full grid place-content-center bg-gray-200 ">
    <div class=" w-[90vw] md:w-[50vw] lg:w-[30vw] bg-white rounded-lg shadow-2xl p-10">
        <h1 class="text-center text-3xl font-bold">Edit Student</h1>
        <!-- <p class="text-center">Edit Student Data!</p> -->

        <form action="../controller.php?action=updateStudent" method="POST">
            <input type="hidden" name="id" value="<?php echo $student['id'] ?>">
            <div class="flex flex-col w-[70%] mx-auto mt-10 space-y-2">
                <label for="name" class="font-medium">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $student['name'] ?>" class=" p-2
                    border-2 border-gray-400 rounded-lg" placeholder="Enter Student Name">
            </div>

            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="gender" class="font-medium">Gender</label>
                <select name="gender" id="gender" required, class="p-2 border-2 border-gray-400 rounded-lg ">
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male" name="male" <?php echo $student['gender'] === 'male' ? 'selected' : '' ?>>Male
                    </option>
                    <option value=" female" name="female"
                        <?php echo $student['gender'] === 'female' ? 'selected' : '' ?>>Female
                    </option>
                </select>
            </div>

            <div class="flex flex-col w-[70%] mx-auto mt-5 space-y-2">
                <label for="mkondo" class="font-medium">Mkondo</label>
                <select name="mkondo" id="mkondo" required class="p-2 border-2 border-gray-400 rounded-lg">
                    <option value="" disabled selected>Select Mkondo</option>
                    <option value="mkondoA" name="mkondoA"
                        <?php echo $student['mkondo'] === 'mkondoA' ? 'selected' : '' ?>>Mkondo A
                    </option>
                    <option value="mkondoB" name="mkondoB"
                        <?php echo $student['mkondo'] === 'mkondoB' ? 'selected' : '' ?>>Mkondo B
                    </option>
                    <option value="mkondoC" name="mkondoC"
                        <?php echo $student['mkondo'] === 'mkondoC' ? 'selected' : '' ?>>Mkondo C
                    </option>
                </select>
            </div>

            <div class="w-[70%] mx-auto">
                <a href="./studentsList.php">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 rounded-lg mt-5 w-full ">update</button>
                </a>
            </div>


        </form>
    </div>
</body>

</html>