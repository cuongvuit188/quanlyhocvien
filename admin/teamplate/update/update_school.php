<?php 
    include "../connect.php";
     $school_id=$_REQUEST['school_id'];
    if (isset($_POST['submit'])) {
        
        $school_name=$_POST['school_name'];
        $qr="UPDATE school SET school_name='$school_name' WHERE school_id='$school_id'";
        $rs=mysqli_query($conn,$qr) or die("Lỗi".mysqli_error($conn));
        if ($rs) {
            header("location: ../list/list_school.php");
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
                        QUẢN LÝ TRƯỜNG HỌC
                        <small>Sửa trường học</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <i class="fa fa-cubes"></i><a href="#"> Quản lý trường học</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus"></i> Sửa trường học
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                                <?php 
                    $qr1="SELECT * FROM school WHERE school.school_id='$school_id'";
                    $rs1=mysqli_query($conn,$qr1) or die("Lỗi" .mysqli_error($conn));
                    $rows=mysqli_fetch_array($rs1, MYSQLI_ASSOC);
                 ?>
             <form action ="#" role="form" method="post" enctype="multipart/form-data">

                <div class="row ">
                    <label class="col-lg-3 right">Tên trường học: <span class="required">(*)</span></label>
                    <div class="col-lg-5"><input type="texy" required name="school_name" class="form-control" value="<?php echo $rows['school_name'] ?>"></div>
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
require_once '../../layout/footer.html'
?>
