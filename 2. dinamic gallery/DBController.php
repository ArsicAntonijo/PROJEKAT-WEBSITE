<?php
    class DBController {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "dbexitfest";
        private $conn;
        function __construct() {
            $this->conn = $this->connectDB();
        }	
        function connectDB() {
            $conn = new mysqli($this->host,$this->user,$this->password,$this->database);
            return $conn;
        }
        function runQuery($query) {
                    $result=$this->conn->query($query);
                    while($row=$result->fetch_array()) {
                        $resultset[]= $row;
                    }		
                    if($result->num_rows> 0)
                        return $resultset;
        }
    }
?>