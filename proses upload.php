<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

// Sertakan file koneksi database Anda
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileexcel'])) {
    $file_mimes = array('application/vnd.ms-excel', 'application/excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    
    if(in_array($_FILES['fileexcel']['type'], $file_mimes)) {
        
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $file_path = $upload_dir . basename($_FILES['fileexcel']['name']);
        move_uploaded_file($_FILES['fileexcel']['tmp_name'], $file_path);

        $spreadsheet = IOFactory::load($file_path);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        
        // Lewati baris pertama (header)
        unset($sheetData[1]);

        $inserted_count = 0;
        
        // Siapkan kueri INSERT untuk keamanan (prepared statement)
        // Pastikan nama tabel adalah 'objek_wisata' dan nama kolom sesuai
        $sql = "INSERT INTO objek_wisata (nama_wisata, deskripsi, lokasi) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            foreach ($sheetData as $row) {
                $nama_wisata = $row['A'];
                $deskripsi = $row['B'];
                $lokasi = $row['C'];
                
                // Bind parameter dan jalankan kueri
                $stmt->bind_param("sss", $nama_wisata, $deskripsi, $lokasi);
                if ($stmt->execute()) {
                    $inserted_count++;
                } else {
                    // Tangani kesalahan jika ada
                    error_log("Error inserting data: " . $stmt->error);
                }
            }
            $stmt->close();
            unlink($file_path); // Hapus file yang diunggah setelah selesai

            header("Location: crud_wisata.php?status=success&count=" . $inserted_count);
            exit;
        } else {
            // Tangani error jika prepared statement gagal
            die("Error preparing statement: " . $conn->error);
        }
    } else {
        header("Location: crud_wisata.php?status=error&message=Tipe file tidak valid.");
        exit;
    }
} else {
    header("Location: crud_wisata.php?status=error&message=Tidak ada file yang diunggah.");
    exit;
}
?>