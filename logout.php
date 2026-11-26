<?php
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Langkah krusial: HAPUS COOKIE
// Atur masa berlaku cookie ke waktu di masa lalu (misalnya, 5 menit  yang lalu)
// Ini akan memaksa browser untuk menghapus cookie tersebut.
setcookie('user_login', '', time() - 60, "/");

// Arahkan kembali ke halaman utama
header("Location: index.php");
exit;
?>