<?php
include 'db_config.php';

// Fungsi pencarian
$search_query = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT * FROM wisata";

if (!empty($search_query)) {
    $search_query = $conn->real_escape_string($search_query);
    $sql .= " WHERE nama_wisata LIKE '%$search_query%' OR lokasi LIKE '%$search_query%'";
}

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .table img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Kelola Data Wisata</h2>
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="crud_create.php" class="btn btn-success">
                <i class="fas fa-plus-circle"></i> Tambah Data
            </a>
            <div>
                <a href="export_pdf.php" class="btn btn-danger">
                    <i class="fas fa-file-pdf"></i> Ekspor PDF
                </a>
                <a href="export_excel.php" class="btn btn-warning text-white">
                    <i class="fas fa-file-excel"></i> Ekspor Excel
                </a>
                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#importExcelModal">
                    <i class="fas fa-file-import"></i> Impor Excel
                </button>
            </div>
        </div>

        <form action="" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari nama atau lokasi wisata..." name="search" value="<?php echo htmlspecialchars($search_query); ?>">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i> Cari
                </button>
            </div>
        </form>
        
        <div class="modal fade" id="importExcelModal" tabindex="-1" aria-labelledby="importExcelModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="importExcelModalLabel">Impor Data dari Excel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Pilih File Excel (.xls, .xlsx)</label>
                                <input type="file" name="fileexcel" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Impor Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama Wisata</th>
                        <th>Keterangan</th>
                        <th>Lokasi</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if ($result) {
                        if ($result->num_rows > 0) {
                            $no = 1;
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . htmlspecialchars($row['nama_wisata']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['deskripsi']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['lokasi']) . "</td>";
                                echo "<td class='d-flex gap-2'>";
                                echo "<a href='crud_update.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i> Edit</a>";
                                echo "<a href='crud_delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'><i class='fas fa-trash-alt'></i> Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>Tidak ada data wisata yang ditemukan.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center text-danger'>Kueri database gagal. Silakan periksa tabel 'wisata' atau koneksi database.</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>