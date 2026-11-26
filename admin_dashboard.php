<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login dan perannya adalah 'admin'
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
      body {
          background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
          min-height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
      }
      .card {
          border-radius: 20px;
          padding: 30px;
      }
      .btn-custom {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
          font-weight: 600;
          border-radius: 12px;
          transition: 0.3s;
      }
      .btn-custom:hover {
          transform: scale(1.05);
          box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      }
  </style>
</head>
<body>
  <div class="container">
    <div class="card shadow-lg">
      <h2 class="card-title text-center mb-3">👋 Selamat Datang, 
          <span class="text-primary"><?php echo htmlspecialchars($_SESSION['username']); ?></span>!
      </h2>
      <p class="text-center">Anda berhasil login sebagai <strong>Administrator</strong>.  
         Silakan pilih menu di bawah ini:</p>
      <hr>
      <div class="d-grid gap-3">

        <a href="index.php" class="btn btn-primary btn-lg btn-custom">
          <i class="bi bi-house-door-fill"></i> Masuk ke Website
        </a>

        <a href="crud_wisata.php" class="btn btn-warning btn-lg btn-custom text-dark">
          <i class="bi bi-database-fill-gear"></i> Kelola Data Wisata (CRUD)
        </a>

        <a href="import_pdf.php" class="btn btn-success btn-lg btn-custom">
          <i class="bi bi-file-earmark-arrow-up-fill"></i> Import Data PDF
        </a>

        <a href="export_pdf.php" class="btn btn-danger btn-lg btn-custom">
          <i class="bi bi-file-earmark-arrow-down-fill"></i> Eksport Data ke PDF
        </a>

        <a href="export_excel.php" class="btn btn-info btn-lg btn-custom text-dark">
          <i class="bi bi-file-earmark-excel-fill"></i> Eksport Data ke Excel
        </a>

        <a href="import_excel.php" class="btn btn-success btn-lg btn-custom">
          <i class="bi bi-file-earmark-spreadsheet-fill"></i> Import Data ke Excel
        </a>

        <a href="logout.php" class="btn btn-dark btn-lg btn-custom mt-3">
          <i class="bi bi-box-arrow-right"></i> Logout
        </a>

      </div>
    </div>
  </div>
</body>
</html>

