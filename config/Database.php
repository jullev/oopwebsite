<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'crud_login';
    private $username = 'root';
    private $password = '';
    public $conn;

   public function connect(){

        return mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->db_name
        );
    }
}
?>