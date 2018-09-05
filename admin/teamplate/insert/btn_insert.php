<?php 		
	include "../connect.php";
  	//lấy thông tin từ các form bằng phương thức POST
	$st_id = $_POST["st_id"];
	$subject_id = $_POST["subject_id"];
	$tutor_id = $_POST["tutor_id"];
	$point = $_POST["point"];
	$note = $_POST["note"]
	// thêm dữ liệu
	$qr = $conn->query("INSERT INTO subject(subject_name,subject_content,tutor_id,course_id) 
		VALUES ('$name','$content','$tutor_id','$course_id')");	
	if ($qr) {
		header("location: ../list/register.php");	
	} else{

	 echo 'Gặp lỗi: '. mysqli_error($conn);

	} 