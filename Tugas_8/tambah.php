<?php
include "config.php";
include "Database.php";
include "Game.php";

$db = new Database($conn);
$game = new Game($db->getConnection());

if (isset($_POST["submit"])) {
    $nama = $_POST["nama_game"];
    $ukuran = $_POST["ukuran_game"];
    $tahun = $_POST["tahun_rilis"];

    if ($game->insert($nama, $ukuran, $tahun)) {
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Tambah Game</title>
</head>
<body>

<h2>Tambah Game Baru</h2>

<div class="form-container">
    <form method="POST">
        <label>Nama Game:</label>
        <input type="text" name="nama_game" required>

        <label>Ukuran Game:</label>
        <input type="text" name="ukuran_game" required>

        <label>Tahun Rilis:</label>
        <input type="number" name="tahun_rilis" required>

        <button type="submit" name="submit">Simpan</button>
        <a href="index.php" class="btn kembali">Kembali</a>
    </form>
</div>

</body>
</html>
