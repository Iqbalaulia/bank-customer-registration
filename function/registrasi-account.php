<?php

include 'connection.php';

$nama_account = $_POST['nama'];
$nip = $_POST['nip'];
$password = $_POST['password'];
$jabatan = 'Belum Diketahui';
$level = 'Belum Diketahui';



// Nomor Rekening
// $nomor_rekening = substr(str_shuffle("1234567890"), 0, 6);

mysqli_query($koneksi,"INSERT INTO user 
(id_teller,nip,nama,jabatan,level,password) VALUES
(NULL,'$nip','$nama_account','$jabatan','$level','$password')");

header("location:../page-konfirmasi.php");

?>