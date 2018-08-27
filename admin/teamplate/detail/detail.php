<?php 
	include "../connect.php";
	$id_point=$_GET['id_point'];
	$qr = $conn->query("SELECT * FROM subject, school, student, `point`, courses WHERE `point`.st_id=student.st_id AND `point`.subject_id=subject.subject_id AND courses.course_id=`point`.course_id AND student.school_id=school.school_id AND $id_point=`point`.id_point");
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
                    CHI TIẾT HỌC VIÊN
                </h1>
                <ol class="breadcrumb">
                    <li>
                          <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="#"> CHI TIẾT HỌC VIÊN</a>
                    </li>
                </ol>
            </div>
        </div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
					<tr>
						<th>Mã học viên</th>
						<th>Họ và tên</th>
						<th>Ngày sinh</th>
						<th>Giới tính</th>
						<th>Số điện thoại</th>
						<th>Email</th>
						<th>Skype</th>
						<th>Địa chỉ</th>
						<th>Trường</th>
						<th>Môn học</th>	
						<th>Nội dung</th>	
						<th>Điểm số</th>
						<th>Ghi chú</th>
					</tr>
					<?php 
					$i =1;
					while ($rs=mysqli_fetch_array($qr)) {
						echo "<tr>";
						echo '<td>'.$i.'</td>';
						echo '<td>'.$rs["st_name"].'</td>';
						echo '<td>'.$rs["st_date"].'</td>';
						echo '<td>'.$rs["st_gender"].'</td>';
						echo '<td>'.$rs["st_phone"].'</td>';
						echo '<td>'.$rs["st_email"].'</td>';
						echo '<td>'.$rs["st_skype"].'</td>';
						echo '<td>'.$rs["st_address"].'</td>';
						echo '<td>'.$rs["school_name"].'</td>';
						echo '<td>'.$rs["subject_name"].'</td>';
						echo '<td>'.$rs["subject_content"].'</td>';
						echo '<td>'.$rs["point"].'</td>';
						echo '<td>'.$rs["note"].'</td>';
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