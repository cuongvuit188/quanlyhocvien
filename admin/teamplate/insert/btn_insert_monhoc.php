<?php 		
	include "../connect.php";
  	//lấy thông tin từ các form bằng phương thức POST
	$name = $_POST["subject_name"];
	$content = $_POST["subject_content"];
	$tutor_id = $_POST["tutor_id"];
	$course_id = $_POST["course_id"];
	$query_check_exist = "SELECT subject_id FROM subject WHERE subject_name = '$name'";
	$exist = mysqli_fetch_array($conn->query($query_check_exist));
	if($exist){ 
		session_start(); 
		$_SESSION['message'] = 'Đã tồn tại'; 
		header("location: ../insert/insert_monhoc.php");
  		exit;
	}
	 
	// thêm dữ liệu
	$qr = $conn->query("INSERT INTO subject(subject_name,subject_content,tutor_id,course_id) 
		VALUES ('$name','$content','$tutor_id','$course_id')");	
	if ($qr) {
		session_start(); 
		$_SESSION['message'] = 'Thêm mới thành công'; 
		header("location: ../list/list_monhoc.php");	
	} else{

	 echo 'Gặp lỗi: '. mysqli_error($conn);

	} 