<?php session_start();?>
<?php
include "../connect.php";

$res = $conn->query("SELECT * FROM school");

require_once '../../layout/head.html'
?>
<?php 
    $err = $errHoten = $errNgaysinh = $errSđt = $errEmail = $errSkype = $errAddress =""; // rỗng
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['st_name']) == false) {
        // do something;
        } else {
            $errHoten = "Họ tên không được rỗng";
        }
         
        if(empty($_POST['st_date']) == false) {
        // do something;
        } else {
            $errNgaysinh = "Ngày sinh phải chọn";
        }
        
        if(array_key_exists('st_phone', $_POST)){
			if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['st_phone'])){
			    $err = 'Nhập sai số điện thoại!';
			}
		}
  
        if(empty($_POST['st_email']) == false) {
        // do something;
        } else {
            $errEmail = "Email không được rỗng";
        }

        if(empty($_POST['st_skype']) == false) {
        // do something;
        } else {
            $errSkype = "Skype không được rỗng";
        }

        if(empty($_POST['st_address']) == false) {
        // do something;
        } else {
            $errAddress= "Địa chỉ không được rỗng";
        }
    }

?>
<?php 
	if (isset($_SESSION['message']))  {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	};
?>
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<body>
	<div id="wrapper">
		<?php
		require_once '../../layout/menu.php';
		?>
		<div id="page-wrapper">

			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							QUẢN LÝ HỌC VIÊN
							<small>Thêm mới học viên</small>
						</h1>
						<ol class="breadcrumb">
							<li>
								<i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
							</li>
							<li>
								<i class="fa fa-cubes"></i><a href="#"> Quản lý học viên</a>
							</li>
							<li class="active">
								<i class="fa fa-plus"></i> Thêm mới học viên
							</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<form action="" role="form" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="">
						<div class="row  ">
							<label class="col-lg-3 right">Tên học viên: </span></label>
							<div class="col-lg-5"><input type="text" class="form-control" name="st_name" value=""><span class="error"><?= $errHoten ?></span></div>
						</div>
						<div class="row ">
							<label class="col-lg-3 right">Ngày sinh: </span></label>
							<div class="col-lg-5"><input type="date" name="st_date" class="form-control" value=""><span class="error"><?= $errNgaysinh ?></span></div>
						</div>

						<div class="row">
							<label class="col-lg-3 right">Giới tính: </label>
							<div class="col-lg-5">
								<select name="st_gender" id="">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
									<option value="Khác">Khác</option>
								</select>
							</div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Số ĐT: </label>
							<div class="col-lg-5"><input type="text" class="form-control" name="st_phone" value=""><span class="error"><?= $err ?></div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Email: </label>
							<div class="col-lg-5"><input type="email" class="form-control" name="st_email" value=""><span class="error"><?= $errEmail ?></div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Skype: </label>
							<div class="col-lg-5"><input type="text" class="form-control" name="st_skype" value=""><span class="error"><?= $errSkype ?></div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Địa chỉ: </label>
							<div class="col-lg-5"><input type="text" class="form-control" name="st_address" value=""><span class="error"><?= $errAddress ?></div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Trường: </label>
							<div class="col-lg-5">
								<select name="school_id">
									<?php while ($row1 = mysqli_fetch_array($res)):;?>
										<option value="<?= $row1[0] ?>"><?= $row1[1]; ?></option>
									<?php endwhile ?>	
								</select>
							</div>
						</div>
						<div class="row button-area">
							<div class="col-lg-3"></div>
							<div class="col-lg-2 right">
								<button type="submit" onclick="redirect()" class="btn btn-primary" value="add" name="insert">
									<span class="glyphicon glyphicon-plus"></span> Thêm mới
								</button>
								<script>
						        function redirect(){
						            window.location.href = "../list/list_hocvien.php";
						        }
						    </script>
							</div>
							<div class="col-lg-2">
								<a href="../list/list_hocvien.php" class="btn btn-danger">
									<span class="glyphicon glyphicon-remove"></span> Hủy bỏ
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php
		require_once '../../layout/footer.html'
		?>
<?php 		
/*include "../connect.php";*/
  	//lấy thông tin từ các form bằng phương thức POST
if (isset($_POST['insert'])) {
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
		// thêm dữ liệu
	$qr = $conn->query("INSERT INTO student(st_name,st_date,st_gender,st_phone,st_email,st_skype,st_address, school_id) 
		VALUES ('$name','$date','$gender','$phone','$email','$skype','$address', '$sc')");	
	if ($qr) {
		$m = 'ok';
        $_SESSION['message'] = $m;

	} 
}
