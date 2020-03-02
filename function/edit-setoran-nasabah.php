<?php 

include 'connection.php';

if(isset($_POST['update']))
{ 

    $id_nasabah = $_POST['id_nasabah'];
    $setoran_tunai = $_POST['setoran_tunai'];
    $tanggal_setoran = date("Y/m/d");
    $nomor_rekening = substr(str_shuffle("1234567890"), 0, 7);

    $result = mysqli_query($koneksi, "UPDATE data_nasabaah SET setoran_tunai='$setoran_tunai',nomor_rekening='$nomor_rekening',tanggal_setoran='$tanggal_setoran' WHERE id_nasabah=$id_nasabah");
    
    header("location:../teller/data-nasabah.php");



}


?>