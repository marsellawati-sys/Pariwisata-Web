<?php
session_start();
// Pastikan hanya admin yang bisa mengakses halaman ini
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

// Hubungkan ke database
include 'db_config.php';
$message = "";

if (isset($_POST['submit_pdf'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["filepdf"]["name"]);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($file_type != "pdf") {
        $message = "<div class='alert alert-danger'>Hanya file PDF yang diizinkan.</div>";
    } else {
        if (move_uploaded_file($_FILES["filepdf"]["tmp_name"], $target_file)) {
            try {
                // Pastikan pustaka Spatie/pdf-to-text sudah terinstal via Composer
                require_once('fpdf.php'); 
                
                // Ekstrak teks dari PDF
                $text = (new Spatie\PdfToText\Pdf($target_file))->text();

                // Langkah 1: Parsing Teks yang Diekstrak
                // Ini adalah bagian paling sulit. Anda harus memecah teks menjadi baris
                // dan kolom sesuai struktur data di PDF Anda.
                $lines = explode("\n", $text);
                $imported_count = 0;
                
                $conn->begin_transaction();
                
                // Langkah 2: Memasukkan ke database
                foreach ($lines as $line) {
                    // Contoh sederhana: memecah baris berdasarkan koma atau karakter lain
                    $data = explode(",", $line);
                    
                    if (count($data) >= 3) {
                        $nama_wisata = trim($data[0]);
                        $deskripsi = trim($data[1]);
                        $lokasi = trim($data[2]);

                        $stmt = $conn->prepare("INSERT INTO wisata (nama_wisata, deskripsi, lokasi) VALUES (?, ?, ?)");
                        $stmt->bind_param("sss", $nama_wisata, $deskripsi, $lokasi);
                        $stmt->execute();
                        $imported_count++;
                        $stmt->close();
                    }
                }
                
                $conn->commit();
                $message = "<div class='alert alert-success'>Data berhasil diimpor! Total baris: " . $imported_count . "</div>";
                
            } catch (Exception $e) {
                $conn->rollback();
                $message = "<div class='alert alert-danger'>Gagal mengimpor data: " . $e->getMessage() . "</div>";
            }
            unlink($target_file); // Hapus file PDF setelah diimpor
        } else {
            $message = "<div class='alert alert-danger'>Gagal mengunggah file.</div>";
        }
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Impor PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Impor Data dari PDF</h2>
        <?php echo $message; ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="filepdf" class="form-label">Pilih file PDF</label>
                <input type="file" class="form-control" name="filepdf" id="filepdf" accept=".pdf" required>
            </div>
            <button type="submit" name="submit_pdf" class="btn btn-primary">Impor Data</button>
        </form>
    </div>
</body>
</html>