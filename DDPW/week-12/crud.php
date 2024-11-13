<?php
    require_once "database.php";
    class Crud {
        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function create($jabatan, $keterangan) {
            $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
            $results = $this->db->conn->query($query);

            return $results;
        }

        public function read() {
            $query = "SELECT * FROM jabatan";
            $results = $this->db->conn->query($query);

            $data = array();

            if ($results->num_rows > 0) {
                while ($row = $results->fetch_assoc()) {
                    $data[] = $row;
                }
            }

            return $data;
        }

        public function readById($id) {
            $query = "SELECT * FROM jabatan WHERE id = $id";
            $results = $this->db->conn->query($query);

            if ($results->num_rows > 0) {
                return $results->fetch_assoc();
            }

            return null;
        }

        public function update($id, $jabatan, $keterangan) {
            $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = $id";
            $results = $this->db->conn->query($query);

            return $results;
        }

        public function delete($id) {
            $query = "DELETE FROM jabatan WHERE id = $id";
            $results = $this->db->conn->query($query);

            return $results;
        }
    }
?>