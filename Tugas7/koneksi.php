<?php
class Koneksi {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "kampus_db";
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);

            if ($this->conn->connect_error) {
                die("Koneksi Gagal: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            die("Koneksi Gagal: " . $e->getMessage());
        }
    }
}
?>