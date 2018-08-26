<?php 
    include "../connect.php";
    $qr = $conn->query("SELECT student.st_id, student.st_name, student.st_date, student.st_gender, student.st_phone, student.st_email, student.st_skype, student.st_address, school.school_name FROM student INNER JOIN school ON student.school_ID = school.school_ID ");
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
                    QUẢN LÝ DANH SÁCH SINH VIÊN THEO KĐT
                    <small>Danh sách KĐT</small>
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
        <div class="them"><a href="../insert/insert_hocvien.php"><i class="fa fa-plus"></i>Thêm sản phẩm</a></div>
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
                        <th>Sửa</th>    
                        <th>Xóa</th>        
                    </tr>
                    <?php 
                    $i =1;
                    while ($rs=mysqli_fetch_array($qr)) {
                        echo "<tr>";
                        echo '<td>'.$i.'</td>';
                        // echo '<td>'.$rs["st_id"].'</td>';
                        echo '<td>'.$rs["st_name"].'</td>';
                        echo '<td>'.$rs["st_date"].'</td>';
                        echo '<td>'.$rs["st_gender"].'</td>';
                        echo '<td>'.$rs["st_phone"].'</td>';
                        echo '<td>'.$rs["st_email"].'</td>';
                        echo '<td>'.$rs["st_skype"].'</td>';
                        echo '<td>'.$rs["st_address"].'</td>';
                        echo '<td>'.$rs["school_name"].'</td>';
                        echo "<td><button type='button' class='btn btn-primary'><a href='../update/update_hocvien.php?st_id=". $rs["st_id"] ."'> Edit</a></button></td>";
                        echo "<td><button type='button' class='btn btn-danger'><a href='../delete/delete_hocvien.php?st_id=". $rs["st_id"] ."' onclick='return checkDelete()'>Delete</a></button></td>";
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