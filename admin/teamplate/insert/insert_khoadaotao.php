<?php 
    include "../connect.php";
    if(isset($_POST['submit'])){
        $course_name=$_POST['course_name'];
        $courses_code=$_POST['courses_code'];
        $date_start=$_POST['date_start'];
        $date_end=$_POST['date_end'];
        $query="INSERT INTO courses(course_name, courses_code, date_start, date_end) VALUES('$course_name', '$courses_code', '$date_start', '$date_end')";
        $result=mysqli_query($conn, $query) or die("Loi".mysqli_error($conn));
        if ($result) {
            header("Location: ../list/list_khoadaotao.php");
        }
    }
 ?>

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
             <form action ="#" role="form" method="post" enctype="multipart/form-data">
                <div class="row  ">
                    <label class="col-lg-3 right">Mã khóa đào tạo: <span class="required">(*)</span></label>
                    <div class="col-lg-5"><input type="text" class="form-control" name="courses_code" value=""></div>
                </div>
                <div class="row ">
                    <label class="col-lg-3 right">Tên khóa đào tạo: <span class="required">(*)</span></label>
                    <div class="col-lg-5"><input type="texy" name="course_name" class="form-control" value=""></div>
                </div>
                
                <div class="row">
                    <label class="col-lg-3 right">Ngày bắt đầu: </label>
                    <div class="col-lg-5"><input type="date" name="date_start" class="form-control" value=""></div>

                </div>
                 <div class="row">
                    <label class="col-lg-3 right">Ngày kết thúc: </label>
                    <div class="col-lg-5"><input type="date" name="date_end" class="form-control" value=""></div>

                </div>
                <div class="row button-area">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-2 right">
                        <button type="submit" class="btn btn-primary" value="add" name="submit">
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
