<?php
include 'db_config.php';
$message = "";
$valid_token = false;
$username = "";

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $current_time = date('Y-m-d H:i:s');

    // Periksa apakah token valid dan belum kedaluwarsa
    $stmt = $conn->prepare("SELECT username FROM password_resets WHERE token = ? AND expires_at > ?");
    if (!$stmt) {
        die("Error: " . $conn->error);
    }
    $stmt->bind_param("ss", $token, $current_time);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $valid_token = true;
    } else {
        $message = "<div class='alert alert-danger'>Tautan reset kata sandi tidak valid atau sudah kedaluwarsa.</div>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Kata Sandi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.auth-container { max-width: 400px; margin-top: 50px; }</style>
</head>
<body>
    <div class="card shadow p-4" style="max-width: 400px; margin: 50px auto;">
        <h3 class="text-center mb-4">Reset Kata Sandi</h3>
        <?php echo $message; ?>
        
        <?php if ($valid_token): ?>
        <form method="post" action="update_password.php">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
            <div class="mb-3">
                <label for="new_password" class="form-label">Kata Sandi Baru</label>
                <input type="password" class="form-control" id="new_password" name="new_password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Ubah Kata Sandi</button>
        </form>
        <?php else: ?>
            <p class="text-center"><a href="forgot_password.php">Minta tautan reset baru.</a></p>
        <?php endif; ?>
    </div>
</body>
</html>