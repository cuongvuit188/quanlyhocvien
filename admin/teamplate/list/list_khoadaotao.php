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
                          <a href="#">Trang chủ</a>
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
        <div class="them"><a href="../insert/insert_khoadaotao.php"><i class="fa fa-plus"></i>Thêm khóa đào tạo</a></div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
					<tr>
						<th>Mã khóa đào tạo</th>
						<th>Tên khóa đào tạo</th>
						<th>Ngày bắt đầu</th>
						<th>Ngày kết thúc</th>
						<th>Sửa</th>	
						<th>Xóa</th>		
					</tr>
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><button type='button' class='btn btn-primary'><a href="../update/update_khoadaotao.php"> Edit</a></button></td>
						<td><button type='button' class='btn btn-danger'><a href="#">Delete</a></button></td>
						</tr>   	
				</table>
			</div>
		</div>
	</div>
</div>
<?php
	require_once '../../layout/footer.html'
 ?>