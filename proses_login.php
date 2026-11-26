<?php
session_start();
include 'db_config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password_from_db = $row['password'];

    // ...
if (password_verify($password, $hashed_password_from_db)) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
    // Redirect ke halaman utama
    header("Location: index.php");
    exit;
}
// ...
        echo "<div class='container mt-5'><div class='alert alert-success' role='alert'>Login berhasil! Selamat datang, " . htmlspecialchars($username) . ".</div></div>";
        // Anda bisa mengarahkan ke halaman lain setelah login berhasil
        // header("Location: index.php"); 
        // exit();
    } else {
        echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>Password salah.</div></div>";
    }
 {
    echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>Username tidak ditemukan.</div></div>";
}
$stmt->close();
$conn->close();
?>