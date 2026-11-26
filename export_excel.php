<?php
// Hubungkan ke database
include 'db_config.php';

// Atur header agar browser mengenali file sebagai Excel
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_wisata.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Ambil data dari tabel wisata
$sql = "SELECT * FROM wisata";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Wisata</th>
                <th>Deskripsi</th>
                <th>Lokasi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama_wisata'] . "</td>";
                    echo "<td>" . $row['deskripsi'] . "</td>";
                    echo "<td>" . $row['lokasi'] . "</td>";
                    echo "</tr>";
                }
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>