<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'connection.php';

// menangkap data yang dikirim dari form login
$nip = $_POST['nip'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where nip='$nip' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);



// cek apakah username dan password di temukan pada database
if($cek > 0){
	// $row = mysqli_fetch_array($login);
	$data = mysqli_fetch_assoc($login);
	
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['id_teller']	= $data['id_teller'];
	
	
	// cek jika user login sebagai admin
	if($data['level']=="Teller"){

		// buat session login dan username
		$_SESSION['nip'] = $nip;
		$_SESSION['level'] = "Teller";
		// alihkan ke halaman dashboard admin
		header("location:../teller/dashboard-teller.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="Manager"){
		// buat session login dan username
		$_SESSION['nip'] = $nip;
		$_SESSION['level'] = "Manager";
		// alihkan ke halaman dashboard pegawai
		header("location:../pimpinan/dashboard-pimpinan.php");

	// cek jika user login sebagai pengurus
	}else{

		// alihkan ke halaman login kembali
		header("location:../index.php");
	}	
}else{
	header("location:validation_login_error.php");
}

?>