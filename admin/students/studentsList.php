<?php
include '../data.php';
$user = auth();
if (!$user) {
    header("Location: ../admin/login.php");
    exit;
}

if ($user['role'] !== 'admin') {
    header("Location: ../admin/dashboard.php");
    exit;
}

if ($db) {
    $sql = "SELECT * FROM students";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <div class="w-full my-5">
        <div class="w-[90vw] mx-auto bg-white rounded-lg shadow-2xl p-10">
            <div class="flex justify-between">
                <div class="">
                    <h1 class="text-start text-3xl font-bold">Students</h1>
                    <p class="text-start">List Of Students</p>
                </div>

                <div class="">
                    <a href="./createStudent.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Create New Student</a>
                </div>
            </div>

            <table class="w-full text-start mt-5">
                <thead class="">
                    <tr>
                        <th class="p-4 text-start">Id</th>
                        <th class="p-4 text-start">Name</th>
                        <th class="p-4 text-start">Gender</th>
                        <th class="p-4 text-start">Mkondo</th>
                        <th class="p-4 text-start">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200 border-b border-gray-400 text-start">
                    <?php foreach ($students as $student) : ?>
                        <tr>
                            <td class="p-4"><?= $student['id'] ?></td>
                            <td class="p-4"><?= $student['name'] ?></td>
                            <td class="p-4"><?= $student['gender'] ?></td>
                            <td class="p-4"><?= $student['mkondo'] ?></td>
                            <td class="p-4">
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/admin/students/editStudent.php?id=<?= $student['id'] ?>">Edit</a>
                                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="/admin/students/deleteStudent.php?id=<?= $student['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>