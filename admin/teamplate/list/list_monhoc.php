<?php 
	include "../connect.php";
	$qr = $conn->query("SELECT subject.*, tutor.tutor_name, courses.course_name FROM `subject`INNER JOIN tutor ON subject.tutor_id = tutor.tutor_id INNER JOIN courses ON subject.course_id = courses.course_id");
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
                    QUẢN LÝ DANH SÁCH MÔN HỌC
                    <small>Danh sách môn học</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                          <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="../list/list_monhoc.php"> QUẢN LÝ MÔN HỌC </a>
                    </li>
                    <li class="active">
                        Danh sách môn học
                    </li>
                </ol>
            </div>
        </div>
        <div class="them"><a href="../insert/insert_monhoc.php"><i class="fa fa-plus"></i>Thêm môn học</a></div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
					<tr>
						<th>Mã môn học</th>
						<th>Tên môn học</th>
						<th>Mã giáo viên</th>
						<th>Tên giáo viên</th>
						<th>Mã khóa học</th>
						<th>Tên khóa học</th>
						<th>Nội dung môn học</th>
						<th>Sửa</th>	
						<th>Xóa</th>		
					</tr>
					<?php 
					$i =1;
					while ($rs=mysqli_fetch_array($qr)) {
						?> 
						<tr>
							<td>
								<?=  $rs['subject_id'] ?>
							</td> 
							<td>
								<?=  $rs['subject_name'] ?>
							</td>
							<td>
								<?=  $rs['tutor_id'] ?>
							</td>
							<td>
								<?=  $rs['tutor_name'] ?>
							</td>
							<td>
								<?=  $rs['course_id'] ?>
							</td>
							<td>
								<?=  $rs['course_name'] ?>
							</td>
							<td>
								<?=  $rs['subject_content'] ?>
							</td>
							<td>
							   <a class='btn btn-primary' href='../update/update_monhoc.php?subject_id=<?=  $rs['subject_id'] ?>'> Edit</a> 
							</td>
							<td>
								<a class='btn btn-danger' href='../delete/delete_monhoc.php?subject_id=<?= $rs["subject_id"] ?>' onclick='return checkDelete()'>Delete</a> 
							</td>


					<?php } ?>      	
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