<?php 
	include "../connect.php";
	$qr = $conn->query("SELECT tutor.* FROM `tutor`");
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
                    QUẢN LÝ DANH SÁCH NGƯỜI HƯỚNG DẪN
                    <small>Danh sách người hướng dẫn</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                          <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="../list/list_monhoc.php"> QUẢN LÝ DANH SÁCH NGƯỜI HƯỚNG DẪN </a>
                    </li>
                    <li class="active">
                        Danh sách người hướng dẫn
                    </li>
                </ol>
            </div>
        </div>
        <div class="them"><a href="../insert/insert_giaovien.php"><i class="fa fa-plus"></i>Thêm người hướng dẫn</a></div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
					<tr>
						<th>Mã người hướng dẫn</th>
						<th>Tên người hướng dẫn</th>
						<th>Số điện thoại người hướng dẫn</th>
						<th>Email người hướng dẫn</th>
						<th>Skype người hướng dẫn</th>
						<th>Sửa</th>	
						<th>Xóa</th>		
					</tr>
					<?php 
					$i =1;
					while ($rs=mysqli_fetch_array($qr)) {
						?> 
						<tr>
							<td>
								<?=  $rs['tutor_id'] ?>
							</td> 
							<td>
								<?=  $rs['tutor_name'] ?>
							</td>
							<td>
								<?=  $rs['tutor_phone'] ?>
							</td>
							<td>
								<?=  $rs['tutor_email'] ?>
							</td>
							<td>
								<a href="skype:<?=  $rs['tutor_skype'] ?>?chat"><?=  $rs['tutor_skype'] ?></a>
							</td>
							<td>
							   <a class='btn btn-primary' href='../update/update_giaovien.php?tutor_id=<?=  $rs['tutor_id'] ?>'> Edit</a> 
							</td>
							<td>
								<?php 
								$id = $rs["tutor_id"];
								$course_query = $conn->query("SELECT subject.*  FROM `subject` WHERE subject.tutor_id = $id");
						 		$tutor_id = mysqli_fetch_array($course_query);
								?>
								 <?php if(!$tutor_id):?>  
								<a class='btn btn-danger' href='../delete/delete_giaovien.php?tutor_id=<?= $rs["tutor_id"] ?>' onclick='return checkDelete()'>Delete</a> 
								<?php else:?>
									Không được xóa
								<?php endif;?>
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