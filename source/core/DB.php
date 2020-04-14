<?php

class DB{

    public $conn;
    public $severname = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'caichien';

    function __construct() {
        $this->conn = mysqli_connect($this->severname, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
        mysqli_query($this->conn, "SET NAME 'utf8");
    }
    

}
?>