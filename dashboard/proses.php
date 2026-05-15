<?php

session_start();

include '../config/Database.php';
include '../classes/Mahasiswa.php';

$database = new Database();

$db = $database->connect();

$mahasiswa = new Mahasiswa($db);

// tambah data
if(isset($_POST['tambah'])){

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $semester = $_POST['semester'];

    $mahasiswa->insert(
        $nama,
        $jurusan,
        $semester
    );

    header("Location: index.php");
}
// update data
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $semester = $_POST['semester'];

    $mahasiswa->update(
        $id,
        $nama,
        $jurusan,
        $semester
    );

    header("Location: index.php");
}
?>