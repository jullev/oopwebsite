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

// ambil data berdasarkan id
$data = $mahasiswa->getById($id);

// ubah menjadi array
$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-warning">

                    <h3>Edit Data Mahasiswa</h3>

                </div>

                <div class="card-body">

                    <form action="proses.php"
                          method="POST">

                        <!-- hidden id -->

                        <input type="hidden"
                               name="id"
                               value="<?= $row['id'] ?>">

                        <!-- nama -->

                        <div class="mb-3">

                            <label class="form-label">

                                Nama Mahasiswa

                            </label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   value="<?= $row['nama'] ?>"
                                   required>

                        </div>

                        <!-- jurusan -->

                        <div class="mb-3">

                            <label class="form-label">

                                Jurusan

                            </label>

                            <input type="text"
                                   name="jurusan"
                                   class="form-control"
                                   value="<?= $row['jurusan'] ?>"
                                   required>

                        </div>

                        <!-- semester -->

                        <div class="mb-3">

                            <label class="form-label">

                                Semester

                            </label>

                            <input type="number"
                                   name="semester"
                                   class="form-control"
                                   value="<?= $row['semester'] ?>"
                                   required>

                        </div>

                        <!-- tombol -->

                        <button type="submit"
                                name="update"
                                class="btn btn-primary">

                            Update

                        </button>

                        <a href="index.php"
                           class="btn btn-secondary">

                           Kembali

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>