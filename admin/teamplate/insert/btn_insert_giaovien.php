<?php 		
	include "../connect.php";
  	//lấy thông tin từ các form bằng phương thức POST
	$tutor_name = $_POST["tutor_name"];
	$tutor_phone = $_POST["tutor_phone"];
	$tutor_email = $_POST["tutor_email"];
	$tutor_skype = $_POST["tutor_skype"];
	// thêm dữ liệu
	$qr = $conn->query("INSERT INTO tutor(tutor_name,tutor_phone,tutor_email,tutor_skype) 
		VALUES ('$tutor_name','$tutor_phone','$tutor_email','$tutor_skype')");	
	if ($qr) {
		header("location: ../list/list_giaovien.php");	
	} else{

	 echo 'Gặp lỗi: '. mysqli_error($conn);

	}