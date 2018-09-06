<?php       
include "../connect.php";
    //lấy thông tin từ các form bằng phương thức POST
$name = $_POST["st_name"];
$date = $_POST["st_date"];
$gender = $_POST["st_gender"];
$phone = $_POST["st_phone"];
$email= $_POST["st_email"];
$skype = $_POST["st_skype"];
$address = $_POST["st_address"];
$sc = $_POST["school_id"];
$query = $conn->query("SELECT school_id FROM school where school_name = '$sc'"); 
    //kiểm tra sự tồn tại của t_id
$exist= mysqli_fetch_array($query);
if($exist){
    $id = $exist[0];
}else{
    $t = $conn->query("INSERT INTO school (school_name) 
        VALUES ('$sc')");
    $id = $conn->insert_id;
    var_dump($t);
}
if (mysqli_num_rows($conn->query("SELECT st_email FROM student WHERE st_email ='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    // thêm dữ liệu
$qr = $conn->query("INSERT INTO student(st_name,st_date,st_gender,st_phone,st_email,st_skype,st_address, school_id) 
    VALUES ('$name','$date','$gender','$phone','$email','$skype','$address', '$sc')");

if ($qr) {
      header("location: ../list/list_hocvien.php");
  }  