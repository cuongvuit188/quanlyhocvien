<?php 
    include "../connect.php";
    $st_id = $_GET['st_id'];
    $qr = $conn->query("SELECT student.st_id, student.st_name, student.st_date, student.st_gender, student.st_phone, student.st_email, student.st_skype, student.st_address, school.school_name FROM student INNER JOIN school ON (student.school_ID = school.school_ID) and (st_id ='$st_id')");
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
                            QUẢN LÝ SẢN PHẨM
                            <small>Sửa sản phẩm</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
                            </li>
                            <li>
                                <i class="fa fa-cubes"></i><a href="#"> Quản lý sản phẩm</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Sửa sản phẩm
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <form action ="btn_update_hocvien.php" role="form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="st_id" value="<?= $rs['st_id']; ?>"></td>
                        <div class="row  ">
                            <label class="col-lg-3 right">Tên học viên: <span class="required">(*)</span></label>
                            <div class="col-lg-5"><input type="text" class="form-control" name="st_name" value="<?= $rs['st_name'] ?>"></div>
                        </div>
                        <div class="row ">
                            <label class="col-lg-3 right">Ngày sinh: <span class="required">(*)</span></label>
                            <div class="col-lg-5"><input type="date" name="st_date" class="form-control" value="<?= $rs['st_date'] ?>"></div>
                        </div>
                        
                        <div class="row">
                            <label class="col-lg-3 right">Giới tính: </label>
                            <div class="col-lg-5"><input type="text" class="form-control" name="st_gender" value="<?= $rs['st_gender'] ?>"></div>

                        </div>
                        <div class="row">
                            <label class="col-lg-3 right">Số ĐT: </label>
                            <div class="col-lg-5"><input type="text" class="form-control" name="st_phone" value="<?= $rs['st_phone'] ?>"></div>

                        </div>
                        <div class="row">
                            <label class="col-lg-3 right">Email: </label>
                            <div class="col-lg-5"><input type="email" class="form-control" name="st_email" value="<?= $rs['st_email'] ?>"></div>

                        </div>
                        <div class="row">
                            <label class="col-lg-3 right">Skype: </label>
                            <div class="col-lg-5"><input type="text" class="form-control" name="st_skype" value="<?= $rs['st_skype'] ?>"></div>

                        </div>
                        <div class="row">
                            <label class="col-lg-3 right">Địa chỉ: </label>
                            <div class="col-lg-5"><input type="text" class="form-control" name="st_address" value="<?= $rs['st_address'] ?>"></div>

                        </div>
                        <div class="row">
                            <label class="col-lg-3 right">Trường: </label>
                            <div class="col-lg-5"><input type="text" class="form-control" name="t_id" value="<?= $rs['school_name'] ?>"></div>

                        </div>
                        <div class="row button-area">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2 right">
                                <button type="submit" class="btn btn-primary" value="update" name="update">
                                    <span class="glyphicon glyphicon-plus"></span> Sửa
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
        include_once '../../layout/footer.html'
        ?>
