<?php 
	include "../connect.php";
	$subject_id = $_GET['subject_id'];
	$qr = $conn->query("DELETE FROM subject WHERE subject_id = '$subject_id'");	
	if ($qr) {
		header("location: ../list/list_monhoc.php");	
	}  else{

	 echo 'Gặp lỗi: '. mysqli_error($conn);

	}