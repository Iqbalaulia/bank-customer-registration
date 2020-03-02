<?php 

session_start();
if($_SESSION['level']==""){
    header("location:../index.php");
}

include 'connection.php';

$status_buku = $_POST['status_buku'];
$id_nasabah = $_GET['id_nasabah'];
$result = mysqli_query($koneksi, "UPDATE data_nasabaah SET status_buku='$status_buku' WHERE id_nasabah=$id_nasabah");
// ------------------------------------------------------------------------------------------------

// memanggil library FPDF
require('../fpdf182/fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');

$pdf->AddPage();

$pdf->Image('../logo/bank-jelita.jpg',255,10,-900);
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','',12);


$i=1;
$id_nasabah = $_GET['id_nasabah'];
$cetak_buku = mysqli_query($koneksi, "SELECT * FROM data_nasabaah WHERE id_nasabah='$id_nasabah' ");
while ($buku_nasabah = mysqli_fetch_array($cetak_buku)){

$pdf->SetFont('Arial','B',12);

$pdf->SetFont('Arial','',12);
$pdf->Cell(20,7,$buku_nasabah[''],0,0);
$pdf->Cell(30,7,$buku_nasabah[''],0,0);
$pdf->Cell(30,7,$buku_nasabah[''],0,1);
$pdf->Cell(30,7,$buku_nasabah[''],0,1);
$pdf->Cell(30,7,$buku_nasabah[''],0,1);
$pdf->Cell(30,7,$buku_nasabah[''],0,1);

// $pdf->SetFont('Arial','B',12);
$pdf->Cell(20,7,'KEPADA YTH',0,1);
$pdf->Cell(20,7,'Bapak/Ibu',0,0);
$pdf->Cell(40,7,$buku_nasabah['nama_nasabah'],0,0);
$pdf->Cell(90,7,'',0,0);
$pdf->Cell(20,7,'Tanggal Cetak  :',0,0);
$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,7,date('d F Y', strtotime($buku_nasabah['tanggal_setoran'])),0,0);



$pdf->Cell(50,7,'',0,1);
$pdf->Cell(40,7,$buku_nasabah['alamat_domisili'],0,0);
$pdf->Cell(110,7,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,7,'JELITA TAPLUS MUDA',0,0);


$pdf->SetFont('Arial','',12);

$pdf->Cell(50,7,'',0,1);
$pdf->Cell(8,7,'RT:',0,0);
$pdf->Cell(7,7,$buku_nasabah['rt'],0,0);
$pdf->Cell(10,7,'RW :',0,0);
$pdf->Cell(40,7,$buku_nasabah['rw'],0,0);

$pdf->Cell(85,7,'',0,0);
$pdf->Cell(20,7,'No Rekening     : ',0,0);
$pdf->Cell(20,7,'',0,0);
$pdf->Cell(20,7,$buku_nasabah['nomor_rekening'],0,0);


$pdf->Cell(50,7,'',0,1);
$pdf->Cell(8,7,$buku_nasabah['kelurahan_desa'],0,0);
$pdf->Cell(142,7,'',0,0);
$pdf->Cell(20,7,'NPWP               :',0,0);
$pdf->Cell(20,7,'',0,0);
if(empty($buku_nasabah['npwp'])){
    $pdf->Cell(20,7,'Belum Ada',0,0);

}else{
    $pdf->Cell(20,7,$buku_nasabah['npwp'],0,0);

}
$pdf->Cell(50,7,'',0,1);
$pdf->Cell(10,7,$buku_nasabah['kecamatan'],0,0);
$pdf->Cell(140,7,'',0,0);
$pdf->Cell(10,7,'Mata Uang        :',0,0);
$pdf->Cell(30,7,'',0,0);
$pdf->Cell(10,7,'IDR',0,0);


$pdf->Cell(20,7,$buku_nasabah[''],0,0);
$pdf->Cell(30,7,$buku_nasabah[''],0,0);
$pdf->Cell(30,7,$buku_nasabah[''],0,1);





}

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'Tanggal Transaksi',1,0,'C');
$pdf->Cell(50,6,'Jumlah Setoran',1,0,'C');
$pdf->Cell(50,6,'Nomor Rekening',1,0,'C');
$pdf->Cell(75,6,'Atas Nama',1,0,'C');
$pdf->Cell(50,6,'Teller',1,1,'C');
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM data_nasabaah WHERE id_nasabah='$id_nasabah'");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(50,10,date('d F Y', strtotime($row['tanggal_setoran'])),1,0,'C');
    $pdf->Cell(50,10,'Rp. '.$row['setoran_tunai'],1,0,'C');
    $pdf->Cell(50,10,$row['nomor_rekening'],1,0,'C');
    $pdf->Cell(75,10,$row['nama_nasabah'],1,0,'C');
    $pdf->Cell(50,10,$_SESSION['nama'],1,1,'C');
}


$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->Cell(200,7,'',0,0);

$pdf->SetFont('Arial','B',18);
$pdf->Cell(10,7,'S.E & O',0,0);

$pdf->Cell(10,7,'',0,1);

$pdf->Cell(155,7,'',0,0);
$pdf->Cell(10,7,'PT. BANK JELITA (PERSERO) TBK',0,0);


$pdf->Cell(10,7,'',0,1);

$pdf->Cell(195,7,'',0,0);
$pdf->Cell(10,7,'SURABAYA',0,0);



$pdf->Output();

?>