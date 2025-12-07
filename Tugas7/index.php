<?php
require_once 'mahasiswa.php';
$mhs = new Mahasiswa();
$data_mahasiswa = $mhs->tampilData();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - PHP OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>📚 Data Mahasiswa (Menggunakan PHP OOP)</h2>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                if (!empty($data_mahasiswa)) {
                    foreach ($data_mahasiswa as $row) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($row['npm']); ?></td>
                    <td><?php echo htmlspecialchars($row['nama']); ?></td>
                    <td><?php echo htmlspecialchars($row['jurusan']); ?></td>
                </tr>
                <?php 
                    }
                } else {
                    echo "<tr><td colspan='4' class='empty-data'>Tidak ada data mahasiswa.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>