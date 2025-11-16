<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Header
echo "<tr><th>Bilangan</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Isi tabel
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<th>$i</th>"; // Kolom pertama

    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>