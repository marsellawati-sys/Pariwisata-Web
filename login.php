<?php
$servername = "localhost";
$db_username = "form registrasi wisata";
$db_password = "";
$dbname = "form registrasi wisata"; // Nama database yang benar

// Membuat koneksi
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>