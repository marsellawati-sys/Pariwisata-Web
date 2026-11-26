<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Periksa apakah nama pengguna ada di database
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Hapus token lama yang mungkin ada
        $conn->query("DELETE FROM password_resets WHERE username = '$username'");

        // Buat token unik
        $token = bin2hex(random_bytes(32));
        $expires_at = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Simpan token baru ke database
        $stmt_insert = $conn->prepare("INSERT INTO password_resets (username, token, expires_at) VALUES (?, ?, ?)");
        $stmt_insert->bind_param("sss", $username, $token, $expires_at);
        $stmt_insert->execute();
        $stmt_insert->close();

        // **PENTING**: Ini hanyalah contoh. Dalam aplikasi nyata,
        // Anda harus mengirim email ke pengguna dengan tautan ini.
        $reset_link = "http://localhost/UAS%20Web%20Programming/reset_password.php?token=" . $token;
        echo "<div class='container mt-5 alert alert-success'>
                Tautan reset Anda (hanya untuk pengujian): <br>
                <a href='" . $reset_link . "'>" . $reset_link . "</a>
              </div>";
        exit;
    }

    // Arahkan kembali ke halaman lupa kata sandi dengan pesan sukses/gagal
    header("Location: forgot_password.php?status=success");
    exit;
}
?>