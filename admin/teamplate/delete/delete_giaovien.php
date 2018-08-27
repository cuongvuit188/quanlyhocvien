<?php 
	include "../connect.php";
	$tutor_id = $_GET['tutor_id'];
	$qr = $conn->query("DELETE FROM tutor WHERE tutor_id = '$tutor_id'");	 

	if ($qr) {
		header("location: ../list/list_giaovien.php");	
	} else{

	 echo 'Gặp lỗi: '. mysqli_error($conn);

	}