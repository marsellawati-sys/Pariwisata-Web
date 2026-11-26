<?php
include 'db_config.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Hash password untuk keamanan
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Siapkan query untuk mencegah SQL Injection
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);

if ($stmt->execute()) {
    echo "<div class='container mt-5'><div class='alert alert-success' role='alert'>Registrasi berhasil! Silakan <a href='login.php'>Login</a>.</div></div>";
} else {
    echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>Error: " . $stmt->error . "</div></div>";
}
$stmt->close();
$conn->close();
?>