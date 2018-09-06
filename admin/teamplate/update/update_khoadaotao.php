<?php 
    include "../connect.php";
    $course_id=$_REQUEST['course_id'];
     if(isset($_POST['submit'])){
        
        $course_name=$_POST['course_name'];
        $courses_code=$_POST['courses_code'];
        $date_start=$_POST['date_start'];
        $date_end=$_POST['date_end'];
        $query="UPDATE courses SET course_name = '$course_name', courses_code = '$courses_code', date_start = '$date_start', date_end = '$date_end'  WHERE course_id='$course_id'";
        $result=mysqli_query($conn, $query) or die("Loi".mysqli_error($conn));
        if ($result) {
            header("Location: ../list/list_khoadaotao.php");
        }
    }
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
                    <?php 
                        $qr1="SELECT * FROM courses WHERE courses.course_id='$course_id'";
                    $rs1=mysqli_query($conn,$qr1) or die("Lỗi" .mysqli_error($conn));
                    $rows=mysqli_fetch_array($rs1, MYSQLI_ASSOC);
                     ?>
                    <form action ="#" role="form" method="post" enctype="multipart/form-data">
                        <div class="row  ">
                            <label class="col-lg-3 right">Mã khóa đào tạo: <span class="required">(*)</span></label>
                            <div class="col-lg-5"><input type="text" class="form-control" name="courses_code" value="<?php echo $rows['courses_code'] ?>"></div>
                        </div>
                        <div class="row ">
                            <label class="col-lg-3 right">Tên khóa đào tạo: <span class="required">(*)</span></label>
                            <div class="col-lg-5"><input type="text" name="course_name" class="form-control" value="<?php echo $rows['course_name'] ?>"></div>
                        </div>
                        
                        <div class="row">
                            <label class="col-lg-3 right">Ngày bắt đầu: </label>
                            <div class="col-lg-5"><input type="date" class="form-control" name="date_start" value="<?php echo $rows['date_start'] ?>"></div>

                        </div>
                        <div class="row">
                            <label class="col-lg-3 right">Ngày kết thúc: </label>
                            <div class="col-lg-5"><input type="date" class="form-control" name="date_end" value="<?php echo $rows['date_end'] ?>"></div>

                        </div>
                        <div class="row button-area">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2 right">
                                <button type="submit" class="btn btn-primary" value="" name="submit">
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
