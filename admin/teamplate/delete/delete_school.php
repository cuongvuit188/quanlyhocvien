<?php 
	include "../connect.php";
	$school_id = $_GET['school_id'];
	$qr = $conn->query("DELETE FROM school WHERE school_id = '$school_id'");	
	if ($qr) {
		header("location: ../list/list_school.php");	
	} 