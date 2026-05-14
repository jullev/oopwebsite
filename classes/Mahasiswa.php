<?php

class Mahasiswa {

    private $conn;
    private $table = "mahasiswa";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {

        $query = "SELECT * FROM " . $this->table;

        return mysqli_query($this->conn, $query);
    }

    public function insert($nama, $jurusan, $semester) {

        $query = "INSERT INTO " . $this->table . "
                  (nama, jurusan, semester)
                  VALUES
                  ('$nama','$jurusan','$semester')";

        return mysqli_query($this->conn, $query);
    }

    public function getById($id) {

        $query = "SELECT * FROM " . $this->table . "
                  WHERE id='$id'";

        return mysqli_query($this->conn, $query);
    }

    public function update($id, $nama, $jurusan, $semester) {

        $query = "UPDATE " . $this->table . "
                  SET
                  nama='$nama',
                  jurusan='$jurusan',
                  semester='$semester'
                  WHERE id='$id'";

        return mysqli_query($this->conn, $query);
    }

    public function delete($id) {

        $query = "DELETE FROM " . $this->table . "
                  WHERE id='$id'";

        return mysqli_query($this->conn, $query);
    }
}
?>