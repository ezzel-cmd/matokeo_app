<?php
include 'data.php';


$action = '';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    echo "action not found";
    exit;
}

switch ($action) {
    case 'login':
        login($db);
        break;
    case 'logout':
        logout();
        break;
    case 'createStudent':
        createStudent();
        break;
    case 'createMatokeo':
        createMatokeo();
        break;
    case 'updateStudent':
        updateStudent();
        break;
    case 'updateMatokeo':
        updateMatokeo();
        break;
    default:
        echo "action not found";
        exit;
}

function login($db)
{
    $email = '';
    $password = '';
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        echo "email not found";
        exit;
    }
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        echo "password not found";
        exit;
    }

    $userData = [];
    // find user
    if ($db) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->execute([':email' => $email]);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $userData = $users[0] ?? [];
    }

    if (empty($userData)) {
        echo "Invalid Email";
        exit;
    }

    // verify password
    if (!password_verify($password, $userData['password'])) {
        echo "Invalid Password";
        exit;
    }

    $_SESSION['user'] = $userData['id'];
    header("Location: /admin/dashboard.php");
}

function logout()
{
    session_unset();
    session_destroy();
    header("Location: /admin/login.php");
}

function createStudent()
{
    if (isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['mkondo'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $mkondo = $_POST['mkondo'];

        $db = db();
        $sql = "INSERT INTO students (name, gender, mkondo) VALUES (:name, :gender, :mkondo)";
        $stmt = $db->prepare($sql);
        $exc = $stmt->execute([':name' => $name, ':gender' => $gender, ':mkondo' => $mkondo]);
        if ($exc) {
            header("Location: ./students/studentsList.php");
            echo "Student Created Successfully";
        }
    }
}

function createMatokeo(){
    if (isset($_POST['muhula']) && isset($_POST['year'])) {
        $muhula = $_POST['muhula'];
        $year = $_POST['year'];

        $db = db();
        $sql = "INSERT INTO creatematokeo (muhula, year) VALUES (:muhula, :year)";
        $stmt = $db->prepare($sql);
        $exc = $stmt->execute([':muhula' => $muhula, ':year' => $year]);
        if($exc){
            header('Location: ./matokeo/matokeoList.php');
        }

    }
}

function updateStudent(){
    if ( isset($_POST['id']) &&     isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['mkondo'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $mkondo = $_POST['mkondo'];

        $db = db();
        $sql = "UPDATE students SET name = :name, gender = :gender, mkondo = :mkondo WHERE id = :id";
        $stmt = $db->prepare($sql);
        $exc = $stmt->execute([':name' => $name, ':gender' => $gender, ':mkondo' => $mkondo, ':id' => $id]);
        if ($exc) {
            header("Location: ./students/studentsList.php"); 
            exit;
        }
        else {
            echo "Failed to update student";
        }

    }
    else {
        echo "Required fields are missing";
        exit;   
    }
}

function updateMatokeo() {
    if( isset($_POST['id']) && isset($_POST['muhula']) && isset($_POST['year'])){
        $id = $_POST['id'];
        $muhula = $_POST['muhula'];
        $year = $_POST['year'];

        $db = db();
        $sql = "UPDATE creatematokeo SET id = :id, muhula = :muhula, year = :year WHERE id = :id";
        $stmt = $db->prepare($sql);
        $exc = $stmt->execute([':id' => $id, ':muhula' => $muhula, ':year' =>$year]);
        if($exc){
            header("Location: ./matokeo/matokeoList.php");
        }
        else{
            echo "Failed to update matokeo";
        }
    }
    else {
        echo "Required fields are missing";
    }

}