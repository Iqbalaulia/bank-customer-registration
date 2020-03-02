<?php 

include 'connection.php';

// $status_buku = $_POST['status_buku'];
// $id_nasabah = $_GET['id_nasabah'];
// $result = mysqli_query($koneksi, "UPDATE data_nasabaah SET status_buku='$status_buku' WHERE id_nasabah=$id_nasabah");
// // ------------------------------------------------------------------------------------------------





// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru

$pdf->AddPage();
$pdf->Image('../logo/bank-jelita.jpg',10,10,-600);

$pdf->Output();

?>