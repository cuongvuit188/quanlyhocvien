
<?php
include "../connect.php";

require_once '../../layout/head.html'
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
					<form action="btn_insert_hocvien.php" role="form" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="">
						<div class="row  ">
							<label class="col-lg-3 right">Tên học viên: <span class="required">(*)</span></label>
							<div class="col-lg-5"><input type="text" required class="form-control" name="st_name" value=""></div>
						</div>
						<div class="row ">
							<label class="col-lg-3 right">Ngày sinh: <span class="required">(*)</span></label>
							<div class="col-lg-5"><input type="date" required name="st_date" class="form-control" value=""></div>
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
							<label class="col-lg-3 right">Số ĐT: <span class="required">(*)</span></label>
							<div class="col-lg-5"><input type="text" required class="form-control" name="st_phone" value=""></div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Email: <span class="required">(*)</span></label>
							<div class="col-lg-5"><input type="email" required class="form-control" name="st_email" value=""></div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Skype: <span class="required">(*)</span></label>
							<div class="col-lg-5"><input type="text" required class="form-control" name="st_skype" value=""></div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Địa chỉ: <span class="required">(*)</span></label>
							<div class="col-lg-5"><input type="text" class="form-control" name="st_address" value=""></span></div>

						</div>
						<div class="row">
							<label class="col-lg-3 right">Trường: </label>
							<div class="col-lg-5">
								<select name="school_id">
									<?php 
									$res = $conn->query("SELECT * FROM school");
									while ($row1 = mysqli_fetch_array($res)):;?>
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
		require_once '../../layout/footer.html';
		?>