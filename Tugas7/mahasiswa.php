<?php
require_once 'koneksi.php';

class Mahasiswa extends Koneksi {
    public function tampilData() {
        $sql = "SELECT * FROM mahasiswa";
        $result = $this->conn->query($sql);
        $data = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
?>