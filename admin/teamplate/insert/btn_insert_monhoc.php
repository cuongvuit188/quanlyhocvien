<?php 		
	include "../connect.php";
  	//lấy thông tin từ các form bằng phương thức POST
	$name = $_POST["subject_name"];
	$content = $_POST["subject_content"];
	$tutor_id = $_POST["tutor_id"];
	$course_id = $_POST["course_id"];
	// thêm dữ liệu
	$qr = $conn->query("INSERT INTO subject(subject_name,subject_content,tutor_id,course_id) 
		VALUES ('$name','$content','$tutor_id','$course_id')");	
	if ($qr) {
		header("location: ../list/list_monhoc.php");	
	} else{

	 echo 'Gặp lỗi: '. mysqli_error($conn);

	} 