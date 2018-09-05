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
                        QUẢN LÝ MÔN HỌC
                        <small>Thêm mới môn học</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <i class="fa fa-cubes"></i><a href="#"> Quản lý môn học</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus"></i> Thêm mới danh sách
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <form action ="btn_insert.php" role="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="">
                    <?php 
                         include "../connect.php";
                        $course_query = $conn->query("SELECT `point`.*  FROM `point` INNER JOIN courses ON `point`.course_id=`courses`.course_id");
                        if (!$conn) {
                            echo 'Lỗi truy vấn ';
                        }
                     ?>
                    <div class="row  ">
                        <label class="col-lg-3 right">Mã sinh viên: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" class="form-control" name="subject_name" value=""></div>
                    </div>
                    <div class="row ">
                        <label class="col-lg-3 right">Mã môn học: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" name="subject_content" class="form-control" value=""></div>
                    </div>

                    <?php 
                        $course_query = $conn->query("SELECT `point`.*  FROM `point` INNER JOIN courses ON `point`.course_id=`courses`.course_id ");
                        if (!$conn) {
                            echo 'Lỗi truy vấn ';
                        }
                     ?>
                    <div class="row">
                        <label class="col-lg-3 right">Mã khóa học: </label>
                        <div class="col-lg-5">
                            <select class="form-control" name="course_id">
                            <?php while ($course = mysqli_fetch_array($course_query)) { ?>
                              <option value="<?php  echo $course['course_id']?>"><?php echo $course['course_name']?></option> 
                            <?php }?>
                            </select>
                        </div> 
                    </div>
                     <?php 
                       
                        $tutor_query = $conn->query("SELECT `point`.*  FROM `point` INNER JOIN courses ON `point`.course_id=`courses`.course_id");
                        if (!$conn) {
                            echo 'Lỗi truy vấn ';
                        }
                     ?>
                     
                    <div class="row">
                         <div class="row ">
                        <label class="col-lg-3 right">Điểm: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" name="subject_content" class="form-control" value=""></div>
                    </div>

                    </div>

                     <div class="row">
                        <div class="row ">
                        <label class="col-lg-3 right">Ghi chú: <span class="required">(*)</span></label>
                        <div class="col-lg-5"><input type="text" name="subject_content" class="form-control" value=""></div>
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
require_once '../../layout/footer.html'
?>
