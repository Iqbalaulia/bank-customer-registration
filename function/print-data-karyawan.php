<?php 

session_start();
if($_SESSION['level']==""){
    header("location:../index.php");
}

include 'connection.php';


// memanggil library FPDF
require('../fpdf182/fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->Image('../logo/bank-jelita.jpg',10,10,-1200);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(155,7,'',0,0);
$pdf->Cell(35,10,'RAHASIA',1,0,'C');
$pdf->Cell(155,7,'',0,1);
$pdf->Cell(155,7,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(118,7,'',0,0);
$pdf->Cell(50,7,'PT. BANK JELITA (PERSERO) TBK',0,0);
$pdf->Cell(155,7,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(82,7,'',0,0);
$pdf->Cell(50,7,'Gedung Graha Jelita, Jln. Pemuda Kav. 73B, Surabaya. Jawa Timur.',0,0);
$pdf->Cell(155,5,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(155,7,'',0,0);
$pdf->Cell(50,7,'Telp. : 031-1234 5678',0,0);
// m
// mencetak string 


$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(65,7,'',0,0);
$pdf->Cell(50,7,'LAPORAN DATA KARYAWAN',0,0);

$pdf->Cell(155,5,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'NO',1,0,'C');
$pdf->Cell(60,6,'NIP',1,0,'C');
$pdf->Cell(75,6,'Nama',1,0,'C');
$pdf->Cell(40,6,'Jabatan',1,1,'C');

 
$pdf->SetFont('Arial','',10);
$i=1;
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE level = 'Manager'");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(15,10,$i++,1,0,'C');
    $pdf->Cell(60,10,$row['nip'],1,0,'C');
    $pdf->Cell(75,10,$row['nama'],1,0,'C');
    $pdf->Cell(40,10,$row['jabatan'],1,1,'C');
}

$pdf->SetFont('Arial','B',12);


$pdf->Cell(155,5,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'NO',1,0,'C');
$pdf->Cell(60,6,'NIP',1,0,'C');
$pdf->Cell(75,6,'Nama',1,0,'C');
$pdf->Cell(40,6,'Jabatan',1,1,'C');

 
$pdf->SetFont('Arial','',10);
$i=1;
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE level != 'Manager'");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(15,10,$i++,1,0,'C');
    $pdf->Cell(60,10,$row['nip'],1,0,'C');
    $pdf->Cell(75,10,$row['nama'],1,0,'C');
    $pdf->Cell(40,10,$row['jabatan'],1,1,'C');
}


$pdf->Cell(200,7,'',0,0);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,7,'S.E & O',0,0);

$pdf->Cell(10,7,'',0,1);

$pdf->Cell(120,7,'',0,0);
$pdf->Cell(10,7,'PT. BANK JELITA (PERSERO) TBK',0,0);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(120,7,'',0,0);
$pdf->Cell(10,7,'SURABAYA',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(120,7,'',0,0);
$pdf->Cell(10,7,'Pimpinan Bank Jelita',0,0);


$pdf->Output();

?>