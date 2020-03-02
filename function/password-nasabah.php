<?php
// include database connection file
include 'connection.php';
	session_start();

// Check if form is submitted for user update, then redirect to homepage after update
  
    $id_nasabah = $_POST['id_nasabah'];
    $password = $_POST['password'];
    // update user data
    $result = mysqli_query($koneksi, "UPDATE data_nasabaah SET password='$password' WHERE id_nasabah=$id_nasabah");

    
    // Redirect to homepage to display updated user in list
    header("location:../teller/data-nasabah.php");

?>