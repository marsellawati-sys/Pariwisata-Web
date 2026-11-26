<?php
// Memeriksa apakah cookie 'user_login' ada
if (isset($_COOKIE['user_login'])) {
    echo "Anda terdeteksi login. Username: " . htmlspecialchars($_COOKIE['user_login']);
} else {
    echo "Anda belum login. Silakan login.";
}
?>