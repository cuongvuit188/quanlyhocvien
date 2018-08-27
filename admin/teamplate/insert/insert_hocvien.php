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
			    $err = 'Invalid Number!';
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
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<body>
	<div id="wrapper">
		<?php
		require_once '../../layout/menu.php'
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
					<form action="btn_insert_hocvien.php" role="form" method="post" enctype="multipart/form-data">
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
								<select name="school_id">------abc------
									<?php while ($row1 = mysqli_fetch_array($res)):;?>
										<option value="<?= $row1[0] ?>"><?= $row1[1]; ?></option>
									<?php endwhile ?>	
								</select>
							</div>
						</div>
						<div class="row button-area">
							<div class="col-lg-3"></div>
							<div class="col-lg-2 right">
								<button type="submit" class="btn btn-primary" value="add" name="insert">
									<span class="glyphicon glyphicon-plus"></span> Thêm mới
								</button>
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
