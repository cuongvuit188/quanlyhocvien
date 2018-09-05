<?php 
	include "../connect.php";
 ?>
 <?php
    require_once "../../layout/head.html";
 ?>

<link rel="stylesheet" type="text/css" href="../../css/style.css">
<body>
	<div id="wrapper">
        <?php
            require_once '../../layout/menu.php';
         ?>
        <div id="page-wrapper">

            <div class="container-fluid">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    QUẢN LÝ DANH SÁCH KHÓA ĐÀO TẠO
                    <small>Danh sách KĐT</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                          <a href="../index/index.php">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="http://localhost:8080/quanlyhocvien/admin/teamplate/list/list_hocvien.php"> QUẢN LÝ KHÓA ĐÀO TẠO</a>
                    </li>
                    <li class="active">
                        Danh sách khóa đào tạo
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-6">
        <div class="form-group" style="text-align: left;">
        	<form action="" method="POST" class="form-inline">
        		<input class="form-control" type="text" name="txtinput" value="<?= isset($_POST['txtinput']) ?  $_POST['txtinput'] : ''; ?>">
        		<button type="submit" class="btn btn-primary">Tìm KDT theo tháng</button>
        	</form>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="them"><a href="../insert/insert_khoadaotao.php"><i class="fa fa-plus"></i>Thêm khóa đào tạo</a></div>
        </div>
        </div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
					<tr>
						<th>Mã khóa đào tạo</th>
						<th>Tên khóa đào tạo</th>
						<th>Ngày bắt đầu</th>
						<th>Ngày kết thúc</th>
						<th>Chi tiết</th>
						<th>Sửa</th>	
						<th>Xóa</th>		
					</tr>
					<?php 
          if (empty($_POST['txtinput'])) {
            $queryl="SELECT course_id, courses_code, course_name, date_start, date_end  FROM courses";
           $result=mysqli_query($conn,$queryl) or die ("Loi truy van:".mysqli_error($conn));
           while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
         ?>
        <tr>
          <td><?php echo $rows['courses_code']; ?></td>
          <td><?php echo $rows['course_name']; ?></td>
          <td><?php echo $rows['date_start']; ?></td>
          <td><?php echo $rows['date_end']; ?></td>
          <td><button type='button' class='btn btn-info'><a href="../detail/detail_khoadaotao.php?course_id=<?php echo $rows['course_id']; ?>"> Detail</a></button></td>
		  <td><button type='button' class='btn btn-primary'><a href="../update/update_khoadaotao.php"> Edit</a></button></td>
						<td><button type='button' class='btn btn-danger'><a href="#">Delete</a></button></td>
        </tr>
        <?php
          }
        }
          else
          {
            $txtinput=$_POST['txtinput'];
           $queryl="SELECT course_id, courses_code, course_name, date_start, date_end FROM courses WHERE month(date_start)=$txtinput";
           $result=mysqli_query($conn,$queryl) or die ("Loi truy van:".mysqli_error($conn));
           while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
         ?>
         <tr>
          <td><?php echo $rows['courses_code']; ?></td>
          <td><?php echo $rows['course_name']; ?></td>
          <td><?php echo $rows['date_start']; ?></td>
          <td><?php echo $rows['date_end']; ?></td>
          <td><button type='button' class='btn btn-info'><a href="../detail/detail_khoadaotao.php?course_id=<?php echo $rows['course_id']; ?>"> Detail</a></button></td>
		  <td><button type='button' class='btn btn-primary'><a href="../update/update_khoadaotao.php"> Edit</a></button></td>
						<td><button type='button' class='btn btn-danger'><a href="#">Delete</a></button></td>
        </tr>
        <?php
      }
          }      
      ?>


 	
				</table>
			</div>
		</div>
	</div>
</div>
<?php
	require_once '../../layout/footer.html'
 ?>