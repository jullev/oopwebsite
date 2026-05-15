<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../auth/login.php");
}

include '../config/Database.php';
include '../classes/Mahasiswa.php';

$database = new Database();

$db = $database->connect();

$mahasiswa = new Mahasiswa($db);

// ambil id dari url
$id = $_GET['id'];

// hapus data
$mahasiswa->delete($id);

// kembali ke dashboard
header("Location: index.php");

?>