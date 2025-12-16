<?php
include "config.php";
include "Database.php";
include "Game.php";

$db = new Database($conn);
$game = new Game($db->getConnection());

$id = $_GET["id"];
$data = $game->getById($id);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama_game"];
    $ukuran = $_POST["ukuran_game"];
    $tahun = $_POST["tahun_rilis"];

    if ($game->update($id, $nama, $ukuran, $tahun)) {
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit Game</title>
</head>
<body>

<h2>Edit Game</h2>

<div class="form-container">
    <form method="POST">
        <label>Nama Game:</label>
        <input type="text" name="nama_game" value="<?= $data['nama_game'] ?>" required>

        <label>Ukuran Game:</label>
        <input type="text" name="ukuran_game" value="<?= $data['ukuran_game'] ?>" required>

        <label>Tahun Rilis:</label>
        <input type="number" name="tahun_rilis" value="<?= $data['tahun_rilis'] ?>" required>

        <button type="submit" name="submit">Update</button>
        <a href="index.php" class="btn kembali">Kembali</a>
    </form>
</div>

</body>
</html>
