<?php
class Game {
    private $conn;
    private $table = "game";

    public function __construct($db) {
        $this->conn = $db;
    }

    // READ
    public function getAll() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $result = $this->conn->query($query);
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // CREATE
    public function insert($nama, $ukuran, $tahun) {
        $query = "INSERT INTO $this->table (nama_game, ukuran_game, tahun_rilis)
                  VALUES ('$nama', '$ukuran', '$tahun')";
        return $this->conn->query($query);
    }

    // GET 1 DATA
    public function getById($id) {
        $query = "SELECT * FROM $this->table WHERE id = $id";
        return $this->conn->query($query)->fetch_assoc();
    }

    // UPDATE
    public function update($id, $nama, $ukuran, $tahun) {
        $query = "UPDATE $this->table SET 
                  nama_game='$nama',
                  ukuran_game='$ukuran',
                  tahun_rilis='$tahun'
                  WHERE id=$id";
        return $this->conn->query($query);
    }

    // DELETE
    public function delete($id) {
        $query = "DELETE FROM $this->table WHERE id = $id";
        return $this->conn->query($query);
    }
}
?>
