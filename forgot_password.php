<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lupa Kata Sandi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.auth-container { max-width: 400px; margin-top: 50px; }</style>
</head>
<body>
    <div class="card shadow p-4" style="max-width: 400px; margin: 50px auto;">
        <h3 class="text-center mb-4">Lupa Kata Sandi</h3>
        <p class="text-center text-muted">Masukkan nama pengguna Anda untuk menerima tautan reset kata sandi.</p>
        
        <?php if (isset($_GET['status'])): ?>
            <?php if ($_GET['status'] == 'success'): ?>
                <div class="alert alert-success">Jika nama pengguna ditemukan, tautan reset kata sandi telah dikirim.</div>
            <?php elseif ($_GET['status'] == 'error'): ?>
                <div class="alert alert-danger">Terjadi kesalahan. Silakan coba lagi.</div>
            <?php endif; ?>
        <?php endif; ?>

        <form method="post" action="reset_request.php">
            <div class="mb-3">
                <label for="username" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim Tautan Reset</button>
        </form>

        <div class="mt-3 text-center">
            <a href="login.php">Kembali ke halaman Login</a>
        </div>
    </div>
</body>
</html>