<?php 
$koneksi = mysqli_connect("localhost","root","sepatusandal12","teller_bank");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
    echo "Koneksi berhasil";
};
 
?>