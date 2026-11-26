<?php
include 'db_config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = "";
$data = null;

// Tangani permintaan GET untuk menampilkan formulir dengan data yang ada
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM wisata WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $stmt->close();
    } else {
        $message = "<div class='alert alert-danger'>Kesalahan saat mengambil data: " . $conn->error . "</div>";
    }
}

// Tangani permintaan POST untuk memproses pembaruan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_wisata = $_POST['nama_wisata'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi = $_POST['lokasi'];
    
    // Perbaikan: Gunakan kueri UPDATE yang benar
    $sql = "UPDATE wisata SET nama_wisata = ?, deskripsi = ?, lokasi = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Perbaikan: bind_param() harus sesuai dengan kueri
        $stmt->bind_param("sssi", $nama_wisata, $deskripsi, $lokasi, $id);
        
        if ($stmt->execute()) {
            header("Location: crud_wisata.php?status=update_success");
            exit;
        } else {
            $message = "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
        $stmt->close();
    } else {
        $message = "<div class='alert alert-danger'>Kesalahan saat menyiapkan kueri: " . $conn->error . "</div>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Wisata</h2>
        <?php echo $message; ?>
        <?php if ($data): ?>
        <form action="crud_update.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
            <div class="mb-3">
                <label for="nama_wisata" class="form-label">Nama Wisata</label>
                <input type="text" class="form-control" name="nama_wisata" value="<?php echo htmlspecialchars($data['nama_wisata']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3" required><?php echo htmlspecialchars($data['deskripsi']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" value="<?php echo htmlspecialchars($data['lokasi']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="crud_wisata.php" class="btn btn-secondary">Batal</a>
        </form>
        <?php else: ?>
            <div class="alert alert-danger">Data tidak ditemukan.</div>
        <?php endif; ?>
    </div>
</body>
</html>