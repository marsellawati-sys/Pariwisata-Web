<?php
session_start();
// Pastikan pengguna sudah login sebelum menampilkan halaman ini
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5 text-center">
    <div class="card p-4 shadow-sm">
        <h4 class="mb-4">Konfirmasi Keluar</h4>
        <p>Apakah Anda yakin ingin keluar dari akun ini?</p>
        <div class="d-grid gap-2 d-md-block mt-3">
            <a href="logout.php" class="btn btn-danger btn-lg">Ya, Keluar</a>
            
            <a href="index.php" class="btn btn-secondary btn-lg">Tidak, Tetap Masuk</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>