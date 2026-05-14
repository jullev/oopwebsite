<?php

class Auth {

    private $conn;
    private $table = "users";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($username, $password) {

        $password = md5($password);

        $query = "SELECT * FROM " . $this->table . "
                  WHERE username='$username'
                  AND password='$password'";

        $result = mysqli_query($this->conn, $query);

        return mysqli_num_rows($result);
    }
}
?>