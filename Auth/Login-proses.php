<?php

session_start();

include '../config/Database.php';
include '../classes/Auth.php';

$database = new Database();
$db = $database->getConnection();

$auth = new Auth($db);

$username = $_POST['username'];
$password = $_POST['password'];

$login = $auth->login($username, $password);

if($login > 0) {

    $_SESSION['login'] = true;

    header("Location: ../dashboard/index.php");

} else {

    echo "
    <script>
        alert('Login gagal');
        window.location='login.php';
    </script>
    ";
}
?>