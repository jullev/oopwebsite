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
        var_dump($this->conn);
        var_dump($result);
        echo $query;

        return mysqli_num_rows($result);
    }
}
?>