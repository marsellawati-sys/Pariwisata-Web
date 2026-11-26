<?php
session_start();
include 'db_config.php';

// cek role
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'user') {
    die("Akses ditolak! Hanya user biasa yang boleh masuk.");
}

echo "<h2>Daftar Objek Wisata</h2>";

$result = $conn->query("SELECT * FROM objek_wisata");
while ($row = $result->fetch_assoc()) {
    echo "<p><b>{$row['nama']}</b> - {$row['lokasi']} <br>{$row['deskripsi']}</p>";
}
?>
