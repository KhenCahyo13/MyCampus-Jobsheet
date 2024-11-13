<?php
    class Database {
        private $host = 'localhost';
        private $user = 'root';
        private $password = 'root';
        private $database = 'week10-ddpw';
        public $conn;

        public function __construct() {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);

            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    }
?>