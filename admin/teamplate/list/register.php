<?php 
	include "../connect.php";
	$qr = $conn->query("SELECT * FROM `point` INNER JOIN student ON `point`.st_id = `student`.st_id INNER JOIN subject ON `point`.subject_id = `subject`.subject_id INNER JOIN courses ON `point`.course_id = `courses`.course_id");
	if (!$conn) {
		echo 'Lỗi truy vấn ';
	}
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
                    QUẢN LÝ DANH SÁCH ĐIỂM SINH VIÊN
                    <small>Danh sách sinh viên</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                          <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="../list/list_hocvien.php"> QUẢN LÝ HỌC VIÊN</a>
                    </li>
                    <li class="active">
                        Danh sách học viên
                    </li>
                </ol>
            </div>
        </div>
        <div class="them"><a href="../insert/insert.php"><i class="fa fa-plus"></i>Thêm danh sách</a></div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
					<tr>
						<th>STT</th>
						<th>Mã sinh viên</th>
						<th>Mã môn học</th>
						<th>Mã khóa học</th>
						<th>Điểm</th>
						<th>Ghi chú</th>	
					</tr>
					<?php 
					$i =1;
					while ($rs=mysqli_fetch_array($qr)) {
						echo "<tr>";
						echo '<td>'.$rs["id_point"].'</td>';
						echo '<td>'.$rs["st_id"].'</td>';
						echo '<td>'.$rs["subject_id"].'</td>';
						echo '<td>'.$rs["course_id"].'</td>';
						echo '<td>'.$rs["point"].'</td>';
						echo '<td>'.$rs["note"].'</td>';
						echo "<td><button type='button' class='btn btn-primary'><a href='../update/update_hocvien.php?st_id=". $rs["st_id"] ."'> Sửa</a></button></td>";
						echo "<td><button type='button' class='btn btn-danger'><a href='../delete/delete_hocvien.php?st_id=". $rs["st_id"] ."' onclick='return checkDelete()'>Xóa</a></button></td>";
						echo '</tr>';
						$i++;
					}
					?>      	
				</table>
				<script language="JavaScript" type="text/javascript">
					function checkDelete(){
						return confirm('Are you sure?');
					}
				</script>
			</div>
		</div>
	</div>
</div>
<?php
	require_once '../../layout/footer.html'
 ?>