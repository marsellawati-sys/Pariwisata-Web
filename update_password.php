<?php
session_start();
include 'db_config.php';
date_default_timezone_set('Asia/Jakarta');
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        header("Location: reset_password.php?token=" . urlencode($token) . "&status=error&msg=Password tidak cocok.");
        exit;
    }
    
    // Periksa token di database
    $stmt = $conn->prepare("SELECT username FROM password_resets WHERE token = ? AND expires_at > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        
        // Hash kata sandi baru
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Perbarui kata sandi di tabel 'users'
        $stmt_update = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
        $stmt_update->bind_param("ss", $hashed_password, $username);
        
        if ($stmt_update->execute()) {
            // Hapus token setelah berhasil digunakan
            $stmt_delete = $conn->prepare("DELETE FROM password_resets WHERE username = ?");
            $stmt_delete->bind_param("s", $username);
            $stmt_delete->execute();
            $stmt_delete->close();
            
            $_SESSION['reset_success'] = "Kata sandi Anda berhasil diubah! Silakan login.";
            header("Location: login.php");
            exit;
        } else {
            $message = "Gagal memperbarui kata sandi.";
        }
    } else {
        $message = "Tautan reset tidak valid atau sudah kedaluwarsa.";
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Password Status</title>
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-danger">
            <?php echo $message; ?>
        </div>
    </div>
</body>
</html>