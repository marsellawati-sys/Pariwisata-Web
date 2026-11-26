<?php
include 'db_config.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_wisata = $_POST['nama_wisata'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi = $_POST['lokasi'];

    // Perbaikan: Ganti nama kolom dengan garis bawah
    $sql = "INSERT INTO wisata (nama_wisata, deskripsi, lokasi) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Cek apakah prepare() berhasil
    if ($stmt === false) {
        $message = "<div class='alert alert-danger'>Kesalahan saat menyiapkan kueri: " . $conn->error . "</div>";
    } else {
        $stmt->bind_param("sss", $nama_wisata, $deskripsi, $lokasi);
        if ($stmt->execute()) {
            // Perbaikan: Lakukan pengalihan setelah sukses
            header("Location: crud_wisata.php?status=add_success");
            exit(); // Pastikan tidak ada kode lain yang dieksekusi setelah pengalihan
        } else {
            $message = "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Wisata</h2>
        <?php echo $message; ?>
        <form action="crud_create.php" method="post">
            <div class="mb-3">
                <label for="nama_wisata" class="form-label">Nama Wisata</label>
                <input type="text" class="form-control" name="nama_wisata" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="crud_wisata.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>