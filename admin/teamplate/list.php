<?php
    require_once '../layout/head.html'
 ?>

<?php
    require_once '../layout/head.html'
 ?>

 <link rel="stylesheet" type="text/css" href="list.css">
<body>
	<div id="wrapper">
        <?php
            require_once '../layout/menu.php'
         ?>
        <div id="page-wrapper">

            <div class="container-fluid">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    QUẢN LÝ DANH SÁCH SINH VIÊN THEO KĐT
                    <small>Danh sách KĐT</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                          <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="#"> QUẢN LÝ DANH SÁCH SINH VIÊN THEO KĐT</a>
                    </li>
                    <li class="active">
                        Danh sách KĐT
                    </li>
                </ol>
            </div>
        </div>
        <div class="them"><a href="http://localhost:8080/quanlyhocvien/admin/teamplate/insert.php"><i class="fa fa-plus"></i>Thêm sản phẩm</a></div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
				<tr>
					<th>Mã sản phẩm</th>
					<th>Tên sản phẩm</th>
					<th>Thể loại</th>
					<th>Giá</th>
					<th>Kích cỡ</th>
					<th>Khuyến mãi</th>
					<th>Bảo hành</th>
					<th>Tình trạng</th>
					<th>Màu</th>
					<th colspan="2">#</th>
			
				</tr>
				
			</table>
		</div>
		</div>
	</div>
</div>
<?php
	require_once '../layout/footer.html'
 ?>