<?php
// include database connection file
include 'connection.php';
	session_start();

// Check if form is submitted for user update, then redirect to homepage after update
  
    $id_nasabah = $_GET['id_nasabah'];
    $name_teller = $_SESSION['nama'];
    $status_data_nasabah = 'Approved by ' .$name_teller ;

    // update user data
    $result = mysqli_query($koneksi, "UPDATE data_nasabaah SET approved_by='$status_data_nasabah' WHERE id_nasabah=$id_nasabah");

    
    // Redirect to homepage to display updated user in list
    header("location:../teller/data-nasabah.php");

?>