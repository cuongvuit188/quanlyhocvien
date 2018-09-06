<?php 
	include "../connect.php";
	$course_id = $_GET['course_id'];
	$qr = $conn->query("DELETE FROM courses WHERE course_id = '$course_id'");	
	if ($qr) {
		header("location: ../list/list_khoadaotao.php");	
	} 