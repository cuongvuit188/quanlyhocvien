<?php 		
	include "../connect.php";
  	//lấy thông tin từ các form bằng phương thức POST
	$name = $_POST["subject_name"];
	$content = $_POST["subject_content"];
	$tutor_id = $_POST["tutor_id"];
	$course_id = $_POST["course_id"];
	$subject_id = $_POST["subject_id"]; 


	$query_check_exist = "SELECT subject_id FROM subject WHERE subject_name = '$name' AND subject_id != '$subject_id'";
	$exist = mysqli_fetch_array($conn->query($query_check_exist));
	if($exist){ 
		session_start(); 
		$_SESSION['message'] = 'Tên môn học đã tồn tại'; 
		header("location: ../update/update_monhoc.php?subject_id=$subject_id");
  		exit;
	}
	// thêm dữ liệu
	$qr = $conn->query("UPDATE subject SET subject_name = '$name', subject_content = '$content',tutor_id = '$tutor_id',course_id = '$course_id' WHERE subject_id = '$subject_id'");	
	var_dump($qr);

	if ($qr) {
		session_start(); 
		$_SESSION['message'] = 'Update thành công'; 
		header("location: ../list/list_monhoc.php");	
	}  else{

	 echo 'Gặp lỗi: '. mysqli_error($conn);

	}