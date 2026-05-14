<?php

session_start();

if(!isset($_SESSION['login'])) {

    header("Location: ../auth/login.php");
}

include '../config/Database.php';
include '../classes/Mahasiswa.php';

$database = new Database();
$db = $database->getConnection();

$mahasiswa = new Mahasiswa($db);

$data = $mahasiswa->getAll();

?>

<!DOCTYPE html>
<html>
<head>

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">

        <h3>Dashboard Mahasiswa</h3>

        <a href="../auth/logout.php"
           class="btn btn-danger">

           Logout
        </a>

    </div>

    <div class="card shadow">

        <div class="card-body">

            <a href="tambah.php"
               class="btn btn-success mb-3">

               + Tambah Data
            </a>

            <table class="table table-bordered">

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $no = 1;

                while($row = mysqli_fetch_assoc($data)) {
                ?>

                <tr>

                    <td><?= $no++ ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['jurusan'] ?></td>
                    <td><?= $row['semester'] ?></td>

                    <td>

                        <a href="edit.php?id=<?= $row['id'] ?>"
                           class="btn btn-warning btn-sm">

                           Edit
                        </a>

                        <a href="hapus.php?id=<?= $row['id'] ?>"
                           class="btn btn-danger btn-sm">

                           Hapus
                        </a>

                    </td>

                </tr>

                <?php } ?>

            </table>

        </div>

    </div>

</div>

</body>
</html>