<?php 
    include "../connect.php";
    $tutor_id = $_GET['tutor_id'];
    $qr = $conn->query("SELECT tutor.* FROM tutor  WHERE tutor.tutor_id = $tutor_id");
    $rs = mysqli_fetch_array($qr);
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
                            QUẢN LÝ NGƯỜI HƯỚNG DẪN
                            <small>Sửa người hướng dẫn</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
                            </li>
                            <li>
                                <i class="fa fa-cubes"></i><a href="#"> Quản lý người hướng dẫn</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Sửa người hướng dẫn
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                <form action ="btn_update_giaovien.php" role="form" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="tutor_id" value="<?= $rs['tutor_id'] ?>">
                    <div class="row  ">
                        <label class="col-lg-3 right">Tên người hướng dẫn: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" class="form-control" name="tutor_name" value="<?= $rs['tutor_name'] ?>"></div>
                    </div>
                    <div class="row ">
                        <label class="col-lg-3 right">Số điện thoại người hướng dẫn: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" name="tutor_phone" class="form-control" value="<?= $rs['tutor_phone'] ?>"></div>
                    </div>
                    <div class="row ">
                        <label class="col-lg-3 right">Email người hướng dẫn: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="email" name="tutor_email" placeholder="name@example.com" class="form-control" value="<?= $rs['tutor_email'] ?>"></div>
                    </div>
                    
                    <div class="row ">
                        <label class="col-lg-3 right">Skype người hướng dẫn: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" name="tutor_skype" class="form-control" value="<?= $rs['tutor_skype'] ?>"></div>
                    </div>
                    
                    
                    <div class="row button-area">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2 right">
                            <button type="submit" class="btn btn-primary" value="add" name="insert">
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
