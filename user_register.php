<?php
// Menghubungkan ke file konfigurasi database
include 'db_config.php';

// Variabel untuk menyimpan pesan error atau sukses
$message = "";

// Periksa apakah request dikirimkan dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($username) || empty($password)) {
        $message = "<div class='alert alert-warning'>Username dan password tidak boleh kosong.</div>";
    } else {
        // Enkripsi password menggunakan password_hash() untuk keamanan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $role = 'user'; // **Perbedaan utama: Peran diatur sebagai 'user'**

        // Periksa apakah username sudah ada di database
        $check_stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $check_stmt->bind_param("s", $username); // 's' berarti string
        $check_stmt->execute();
        $check_stmt->store_result();

        if ($check_stmt->num_rows > 0) {
            $message = "<div class='alert alert-danger'>Username sudah ada. Silakan pilih username lain.</div>";
        } else {
            // Jika username belum ada, masukkan data baru ke tabel users
            $insert_stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
            $insert_stmt->bind_param("sss", $username, $hashed_password, $role);

            if ($insert_stmt->execute()) {
                $message = "<div class='alert alert-success'>Registrasi user berhasil! Silakan <a href='login.php'>Login di sini</a>.</div>";
            } else {
                $message = "<div class='alert alert-danger'>Error: " . $insert_stmt->error . "</div>";
            }
            $insert_stmt->close();
        }
        $check_stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.auth-container { max-width: 400px; margin-top: 50px; }</style>
</head>
<body>
    <div class="container auth-container">
        <div class="card p-4 shadow-sm">
            <h4 class="mb-3 text-center">Daftar Akun User</h4>
            <?php echo $message; ?>
            <form action="user_register.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-info">Daftar</button>
                </div>
                <p class="mt-3 text-center">Sudah punya akun? <a href="login.php">Login di sini</a></p>
            </form>
        </div>
    </div>
</body>
</html>