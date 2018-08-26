<?php
require_once '../../layout/head.html'
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
             	<form action ="btn_insert_hocvien.php" role="form" method="post" enctype="multipart/form-data">
	                <input type="hidden" name="_token" value="">
	                <div class="row  ">
	                    <label class="col-lg-3 right">Tên học viên: <span class="required">(*)</span></label>
	                    <div class="col-lg-5"><input type="text" class="form-control" name="st_name" value=""></div>
	                </div>
	                <div class="row ">
	                    <label class="col-lg-3 right">Ngày sinh: <span class="required">(*)</span></label>
	                    <div class="col-lg-5"><input type="date" name="st_date" class="form-control" value=""></div>
	                </div>
	                
	                <div class="row">
	                    <label class="col-lg-3 right">Giới tính: </label>
	                    <div class="col-lg-5"><input type="text" class="form-control" name="st_gender" value=""></div>

	                </div>
	                <div class="row">
	                    <label class="col-lg-3 right">Số ĐT: </label>
	                    <div class="col-lg-5"><input type="text" class="form-control" name="st_phone" value=""></div>

	                </div>
	                <div class="row">
	                    <label class="col-lg-3 right">Email: </label>
	                    <div class="col-lg-5"><input type="email" class="form-control" name="st_email" value=""></div>

	                </div>
	                <div class="row">
	                    <label class="col-lg-3 right">Skype: </label>
	                    <div class="col-lg-5"><input type="text" class="form-control" name="st_skype" value=""></div>

	                </div>
	                <div class="row">
	                    <label class="col-lg-3 right">Địa chỉ: </label>
	                    <div class="col-lg-5"><input type="text" class="form-control" name="st_address" value=""></div>

	                </div>
	                <div class="row">
	                    <label class="col-lg-3 right">Trường: </label>
	                    <div class="col-lg-5"><input type="text" class="form-control" name="t_id" value=""></div>

	                </div>
	                <div class="row button-area">
	                    <div class="col-lg-3"></div>
	                    <div class="col-lg-2 right">
	                        <button type="submit" class="btn btn-primary" value="add" name="insert">
	                            <span class="glyphicon glyphicon-plus"></span> Thêm mới
	                        </button>
	                    </div>
	                    <div class="col-lg-2">
	                        <a href="#" class="btn btn-danger">
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
