<?php 

include 'connection.php';

if(isset($_POST['update']))
{ 

    $id_teller = $_POST['id_teller'];
    $nip_karyawan = $_POST['nip'];
    $nama_karyawan = $_POST['nama'];
    $jabatan_karyawan = $_POST['jabatan_karyawan'];
    $level_karyawan = $_POST['level_karyawan'];
    
    
    $result = mysqli_query($koneksi, "UPDATE user SET nip='$nip_karyawan',nama='$nama_karyawan',jabatan='$jabatan_karyawan'
    ,level='$level_karyawan' WHERE id_teller=$id_teller");
    
    header("location:../pimpinan/data-karyawan.php");



}


?>