<?php 
    include "../connect.php";
    $subject_id = $_GET['subject_id'];
    $qr = $conn->query("SELECT subject.* FROM subject INNER JOIN tutor ON subject.tutor_id = tutor.tutor_id INNER JOIN courses ON subject.course_id = courses.course_id  WHERE subject.subject_id = $subject_id");
    $rs = mysqli_fetch_array($qr);

 ?>
 <?php session_start();?>
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
                            QUẢN LÝ MÔN HỌC
                            <small>Sửa môn học</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
                            </li>
                            <li>
                                <i class="fa fa-cubes"></i><a href="#"> Quản lý môn học</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Sửa môn học
                            </li>
                        </ol>
                    </div>
                </div>
                  <?php
                    require_once '../../layout/message.php';
                 ?>
                <div class="row">
                <form action ="btn_update_monhoc.php" role="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject_id" value="<?= $rs['subject_id'] ?>">
                    <div class="row  ">
                        <label class="col-lg-3 right">Tên môn học: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" class="form-control" name="subject_name" value="<?= $rs['subject_name'] ?>"></div>
                    </div>
                    <div class="row ">
                        <label class="col-lg-3 right">Nội dung môn học: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" name="subject_content" class="form-control" value="<?= $rs['subject_content'] ?>"></div>
                    </div>
                    <?php 
                        include "../connect.php";
                        $tutor_query = $conn->query("SELECT tutor.*  FROM `tutor`");
                        if (!$conn) {
                            echo 'Lỗi truy vấn ';
                        }
                     ?>
                    <div class="row">
                        <label class="col-lg-3 right">Giáo viên: </label>
                        <div class="col-lg-5">
                            <select class="form-control" name="tutor_id">
                            <?php while ($tutor =mysqli_fetch_array($tutor_query)) { ?>
                              <option <?= $rs['tutor_id'] == $tutor['tutor_id'] ? 'selected' : '' ;?> value="<?php  echo $tutor['tutor_id']?>"><?php echo $tutor['tutor_name']?></option> 
                            <?php }?>
                            </select>
                        </div> 
                    </div>
                    <?php 
                        
                        $course_query = $conn->query("SELECT courses.*  FROM `courses`");
                        if (!$conn) {
                            echo 'Lỗi truy vấn ';
                        }
                     ?>
                    <div class="row">
                        <label class="col-lg-3 right">Môn học: </label>
                        <div class="col-lg-5">
                            <select class="form-control" name="course_id">
                            <?php while ($course =mysqli_fetch_array($course_query)) { ?>
                              <option <?= $rs['course_id'] == $course['course_id'] ? 'selected' : '' ;?> value="<?php  echo $course['course_id']?>"><?php echo $course['course_name']?></option> 
                            <?php }?>
                            </select>
                        </div> 
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
