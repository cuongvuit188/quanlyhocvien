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
                        QUẢN LÝ NGƯỜI HƯỚNG DẪN
                        <small>Thêm mới người dướng dẫn</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <i class="fa fa-cubes"></i><a href="#"> Quản lý người dướng dẫn</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus"></i> Thêm mới người dướng dẫn
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
             	<form action ="btn_insert_giaovien.php" role="form" method="post" enctype="multipart/form-data">
	                <input type="hidden" name="_token" value="">
	                <div class="row  ">
	                    <label class="col-lg-3 right">Tên người hướng dẫn: <span class="required">(*)</span></label>
	                    <div class="col-lg-5"><input type="text" class="form-control" required name="tutor_name" value=""></div>
	                </div>
	                <div class="row ">
	                    <label class="col-lg-3 right">Số điện thoại người hướng dẫn: <span class="required">(*)</span></label>
	                    <div class="col-lg-5"><input type="text" required name="tutor_phone" class="form-control" value=""></div>
	                </div>
	                <div class="row ">
	                    <label class="col-lg-3 right">Email người hướng dẫn: <span class="required">(*)</span></label>
	                    <div class="col-lg-5"><input type="email" required name="tutor_email" placeholder="name@example.com" class="form-control" value=""></div>
	                </div>
	                
	                <div class="row ">
	                    <label class="col-lg-3 right">Skype người hướng dẫn: <span class="required">(*)</span></label>
	                    <div class="col-lg-5"><input type="text" required name="tutor_skype" class="form-control" value=""></div>
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
