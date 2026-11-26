<?php
include 'db_config.php';

// Periksa apakah parameter 'id' ada di URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Siapkan kueri DELETE untuk keamanan (prepared statement)
    $sql = "DELETE FROM wisata WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        
        // Jalankan kueri
        if ($stmt->execute()) {
            // Jika berhasil, alihkan kembali ke halaman utama dengan pesan sukses
            header("Location: crud_wisata.php?status=delete_success");
        } else {
            // Jika gagal, alihkan kembali dengan pesan error
            header("Location: crud_wisata.php?status=delete_error");
        }
        $stmt->close();
    } else {
        // Tangani error jika prepared statement gagal
        header("Location: crud_wisata.php?status=delete_error&message=PrepareStatementFailed");
    }
} else {
    // Jika tidak ada ID, alihkan kembali dengan pesan error
    header("Location: crud_wisata.php?status=delete_error&message=NoIdProvided");
}

$conn->close();
exit; // Pastikan skrip berhenti setelah pengalihan
?>