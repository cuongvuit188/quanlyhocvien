<?php
ob_start(); 
	$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shopmen";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    $sql = "DELETE FROM sanpham WHERE id_sanpham = '".$_GET['id']."'";
    if ($conn->query($sql) === TRUE) {
    	header("location: http://localhost:8080/quanlyhocvien/admin/sanpham/danhsachsp.php",  true,  301 );  exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
ob_end_flush(); 
 ?>