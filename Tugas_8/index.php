<?php
include "config.php";
include "Database.php";
include "Game.php";

$db = new Database($conn);
$game = new Game($db->getConnection());
$data = $game->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Daftar Game</h2>

<a href="tambah.php" class="btn tambah">+ Tambah Game</a>

<div class="container">
    <?php foreach ($data as $row): ?>
        <div class="card">
            <h3><?php echo $row["nama_game"]; ?></h3>
            <p>Ukuran: <?php echo $row["ukuran_game"]; ?></p>
            <p>Tahun Rilis: <?php echo $row["tahun_rilis"]; ?></p>

            <a href="edit.php?id=<?= $row['id'] ?>" class="btn edit">Edit</a>

            <a href="hapus.php?id=<?= $row['id'] ?>"
               class="btn hapus"
               onclick="return confirm('Yakin ingin menghapus game ini?')">
                Hapus
            </a>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
