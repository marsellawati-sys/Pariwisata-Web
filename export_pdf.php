<?php
// Pastikan tidak ada output sebelum FPDF
ob_start();

include 'db_config.php';
require('fpdf.php');

// Mendefinisikan kelas PDF baru untuk kustomisasi
class PDF extends FPDF
{
    // Array untuk menyimpan lebar dan perataan kolom
    protected $colWidths = [10, 60, 80, 40];
    protected $colAligns;
    
    // Metode untuk mengatur perataan kolom
    function SetAligns($a)
    {
        $this->colAligns = $a;
    }
    
    function Header()
    {
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Laporan Data Wisata', 0, 1, 'C');
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Data dari Database', 0, 1, 'C');
        $this->Ln(10);
        $this->SetFont('Arial', 'B', 10);
        $this->SetFillColor(200, 220, 255);
        $this->Cell($this->colWidths[0], 8, 'No', 1, 0, 'C', true);
        $this->Cell($this->colWidths[1], 8, 'Nama Wisata', 1, 0, 'C', true);
        $this->Cell($this->colWidths[2], 8, 'Deskripsi', 1, 0, 'C', true);
        $this->Cell($this->colWidths[3], 8, 'Lokasi', 1, 1, 'C', true);
    }
    
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Halaman ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
    
    // Metode untuk mencetak baris data dengan MultiCell
    function Row($data)
    {
        $nb = 0;
        for($i = 0; $i < count($data); $i++) {
            $nb = max($nb, $this->NbLines($this->colWidths[$i], $data[$i]));
        }
        $h = 5 * $nb;
        
        $this->CheckPageBreak($h);
        
        for($i = 0; $i < count($data); $i++) {
            $w = $this->colWidths[$i];
            $a = isset($this->colAligns[$i]) ? $this->colAligns[$i] : 'L';
            
            $x = $this->GetX();
            $y = $this->GetY();
            
            $this->Rect($x, $y, $w, $h);
            $this->MultiCell($w, 5, $data[$i], 0, $a);
            $this->SetXY($x + $w, $y);
        }
        $this->Ln($h);
    }
    
    function NbLines($w, $txt)
    {
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 && $s[$nb-1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }
    
    function CheckPageBreak($h)
    {
        if ($this->GetY() + $h > $this->PageBreakTrigger) {
            $this->AddPage($this->CurOrientation);
        }
    }
}

// Buat objek PDF baru
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

$pdf->SetAligns(array('C', 'L', 'L', 'L'));

// Ambil data dari database
$sql = "SELECT nama_wisata, deskripsi, lokasi FROM wisata";
$result = $conn->query($sql);

if (!$result) {
    $pdf->Cell(190, 8, 'Error: Gagal mengambil data dari database.', 1, 1, 'C');
} elseif ($result->num_rows > 0) {
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        $data = array(
            $no++,
            htmlspecialchars($row['nama_wisata']),
            htmlspecialchars($row['deskripsi']),
            htmlspecialchars($row['lokasi'])
        );
        $pdf->Row($data);
    }
} else {
    $pdf->Cell(190, 8, 'Tidak ada data untuk ditampilkan.', 1, 1, 'C');
}

$conn->close();
$pdf->Output('I', 'Data_Wisata_'.date('Y-m-d').'.pdf');
ob_end_flush();
?>