<?php 
include "../connect.php";
$query="SELECT * FROM school";
$result=mysqli_query($conn,$query) or die("Loi truy van:" .mysqli_error($conn));
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
							QUẢN LÝ DANH SÁCH TRƯỜNG HỌC
							<small>Danh sách trường học</small>
						</h1>
						<ol class="breadcrumb">
							<li>
								<a href="#">Trang chủ</a>
							</li>
							<li>
								<i class="fa fa-cubes"></i><a href="../list/list_hocvien.php"> QUẢN LÝ TRƯỜNG HỌC</a>
							</li>
							<li class="active">
								Danh sách trường học
							</li>
						</ol>
					</div>
				</div>
				<div class="them">
					<a href="../insert/insert_school.php"><i class="fa fa-plus"></i>Thêm trường học</a>				
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<tr>
								<th>STT</th>
								<th>Tên trường</th>
								<th>Sửa</th>	
								<th>Xóa</th>		
							</tr>
							<?php
								$i=1;
								while ($rs=mysqli_fetch_array($result)) {
								?>     	
							<tr>
								<td><?php echo $rs['school_id']; ?></td>
								<td> <?php echo $rs['school_name']; ?></td>
								<td>
									<button type='button' class='btn btn-primary'><i class='fa fa-pencil' aria-hidden='true'></i> <a href="../update/update_school.php?school_id=<?= $rs['school_id'] ?>"> Edit</a></button>
								</td>
								<td>
									<?php 
								$id = $rs["school_id"];
								$qr = $conn->query("SELECT *  FROM `student` WHERE student.school_id = $id");
						 		$school_id = mysqli_fetch_array($qr);
								?>
									<?php if(!$school_id):?>  
								<a class='btn btn-danger' href='../delete/delete_school.php?school_id=<?= $rs["school_id"] ?>'>Delete</a> 
								<?php else:?>
									Không được xóa
								<?php endif;?>
								</td>
							</tr>
							<?php
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