<?php
    require_once '../layout/head.html'
 ?>
 <link rel="stylesheet" type="text/css" href="insert.css">
<body>
	<div id="wrapper">
        <?php
            require_once '../layout/menu.php'
         ?>
        <div id="page-wrapper">

            <div class="container-fluid">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    QUẢN LÝ SẢN PHẨM
                    <small>Thêm mới sản phẩm</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="#"> Quản lý sản phẩm</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-plus"></i> Thêm mới sản phẩm
                    </li>
                </ol>
            </div>
        </div>
		<div class="row">
			<form role="form" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="Ykx3ryp4bsyV6mTdxYwm5eX2aBXO4RFSZXhKIlgz">
        <div class="row  ">
            <label class="col-lg-3 right">Tên sản phẩm <span class="required">(*)</span></label>
            <div class="col-lg-5"><input type="text" class="form-control" name="tensp" value=""></div>
        </div>
                <div class="row ">
            <label class="col-lg-3 right">Giá <span class="required">(*)</span></label>
            <div class="col-lg-5"><input type="number" name="giasp" class="form-control" value=""></div>
        </div>
                
                <div class="row">
            <label class="col-lg-3 right">Kích cỡ</label>
            <div class="col-lg-5"><input type="text" class="form-control" name="kichcosp" value=""></div>
         
        </div>
        <div class="row ">
            <label class="col-lg-3 right">Khuyến mại</label>
            <div class="col-lg-5">
                <div class="form-group input-group">
                    <input type="number" class="form-control" name="khuyenmaisp" value="">
                    <span class="input-group-addon">%</span>
                </div>
            </div>
        </div>
                <div class="row">
            <label class="col-lg-3 right">Bảo hành</label>
            <div class="col-lg-5">
                <div class="form-group input-group">
                    <input type="number" class="form-control" name="baohanhsp" value="">
                    <span class="input-group-addon">Tháng</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <div class="row detail_image w100" id="ab">
                </div>
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
	require_once '../layout/footer.html'
 ?>
