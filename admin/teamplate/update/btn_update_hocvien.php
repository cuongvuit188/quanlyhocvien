<?php 		
	include "../connect.php";
  	//lấy thông tin từ các form bằng phương thức POST
  	$st_id = $_POST["st_id"];
	$name = $_POST["st_name"];
	$date = $_POST["st_date"];
	$gender = $_POST["st_gender"];
	$phone = $_POST["st_phone"];
	$email= $_POST["st_email"];
	$skype = $_POST["st_skype"];
	$address = $_POST["st_address"];
	$sc = $_POST["school_id"];
	//kiểm tra sự tồn tại của t_id

	// thêm dữ liệu
	$qr = $conn->query("UPDATE student SET st_name = '$name', st_date = '$date',st_gender = '$gender',st_phone = '$phone',st_email = '$email',st_skype = '$skype',st_address = '$address', school_id = '$sc' WHERE st_id = '$st_id'");	
	var_dump($qr);

	if ($qr) {
		header("location: ../list/list_hocvien.php");	
	} 