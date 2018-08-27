<?php 
    include "../connect.php";
    ?>
<?php
include_once '../../layout/head.html'
?>
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<body>
    <div id="wrapper">
        <?php
        include_once '../../layout/menu.php'
        ?>
        <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            QUẢN LÝ KHÓA ĐÀO TẠO
                            <small>Sửa khóa đào tạo</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
                            </li>
                            <li>
                                <i class="fa fa-cubes"></i><a href="#"> Quản lý khóa đào tạo</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Sửa khóa đào tạo
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <form action ="btn_update_hocvien.php" role="form" method="post" enctype="multipart/form-data">
                        <div class="row  ">
                            <label class="col-lg-3 right">Mã khóa đào tạo: <span class="required">(*)</span></label>
                            <div class="col-lg-5"><input type="text" class="form-control" name="" value=""></div>
                        </div>
                        <div class="row ">
                            <label class="col-lg-3 right">Tên khóa đào tạo: <span class="required">(*)</span></label>
                            <div class="col-lg-5"><input type="text" name="" class="form-control" value=""></div>
                        </div>
                        
                        <div class="row">
                            <label class="col-lg-3 right">Ngày bắt đầu: </label>
                            <div class="col-lg-5"><input type="date" class="form-control" name="" value=""></div>

                        </div>
                        <div class="row">
                            <label class="col-lg-3 right">Ngày kết thúc: </label>
                            <div class="col-lg-5"><input type="date" class="form-control" name="" value=""></div>

                        </div>
                        <div class="row button-area">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2 right">
                                <button type="submit" class="btn btn-primary" value="" name="">
                                    <span class="glyphicon glyphicon-plus"></span> Sửa
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
        include_once '../../layout/footer.html'
        ?>
