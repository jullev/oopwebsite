<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../auth/login.php");
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Tambah Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-success text-white">

                    <h3>Tambah Data Mahasiswa</h3>

                </div>

                <div class="card-body">

                    <form action="proses.php"
                          method="POST">

                        <!-- Nama -->

                        <div class="mb-3">

                            <label class="form-label">

                                Nama Mahasiswa

                            </label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   required>

                        </div>

                        <!-- Jurusan -->

                        <div class="mb-3">

                            <label class="form-label">

                                Jurusan

                            </label>

                            <input type="text"
                                   name="jurusan"
                                   class="form-control"
                                   required>

                        </div>

                        <!-- Semester -->

                        <div class="mb-3">

                            <label class="form-label">

                                Semester

                            </label>

                            <input type="number"
                                   name="semester"
                                   class="form-control"
                                   required>

                        </div>

                        <!-- Tombol -->

                        <button type="submit"
                                name="tambah"
                                class="btn btn-primary">

                            Simpan

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