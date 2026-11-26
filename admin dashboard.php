<?php
session_start();

// Cek jika pengguna belum login, arahkan ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h3 class="card-title">Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
            <p>Ini adalah halaman dashboard admin. Dari sini, Anda dapat mengelola data website.</p>
            <div class="list-group">
                <a href="crud_wisata/index.php" class="list-group-item list-group-item-action">Kelola Data Wisata (CRUD)</a>
                <a href="logout.php" class="list-group-item list-group-item-action text-danger mt-3">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>