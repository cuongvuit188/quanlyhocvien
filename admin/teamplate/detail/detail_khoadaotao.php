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
                    CHI TIẾT KHÓA ĐÀO TẠO
                    <small>Detail KĐT</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                          <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="http://localhost:8080/quanlyhocvien/admin/teamplate/list/list_hocvien.php"> QUẢN LÝ KHÓA ĐÀO TẠO</a>
                    </li>
                    <li class="active">
                        Chi tiết khóa đào tạo
                    </li>
                </ol>
            </div>
        </div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
					<tr>
						<th>Môn học</th>
						<th>Ngày bắt đầu</th>
						<th>Ngày kết thúc</th>
						<th>Người hướng dẫn</th>
					</tr>
        <tr>
          <td>xxx</td>
          <td>xxxx</td>
          <td>xxxx</td>
          <td>xxxx</td>
        </tr>
				</table>
        <button type="button" class='btn btn-info'><a href="../list/list_khoadaotao.php"> Quay lại</a></button>
			</div>
		</div>
	</div>
</div>
<?php
	require_once '../../layout/footer.html'
 ?>