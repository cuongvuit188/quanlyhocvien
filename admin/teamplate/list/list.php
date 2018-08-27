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
                    DANH SÁCH SV THEO KĐT
                    <small>Danh sách SV theo KĐT</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                          <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-cubes"></i><a href="../list/list.php"> DANH SÁCH SV THEO KĐT</a>
                    </li>
                    <li class="active">
                        Danh sách SV theo KĐT
                    </li>
                </ol>
            </div>
        </div>
        <div class="them">
            <a href="../../teamplate/insert.php"><i class="fa fa-plus"></i>Thêm sản phẩm</a>
        <div class="row">
            <div class="col-lg-6">
        <div class="form-group" style="text-align: left;">
            <form action="" method="GET" class="form-inline">
                <select class="form-control" name="list_dkt">
                    <?php $queryl = "SELECT course_id, course_name FROM courses";
                    $result = mysqli_query($conn,$queryl) or die ("Loi truy van:".mysqli_error($conn));
                        while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
                        <option value="<?php echo $rows['course_id'] ?>"><?php echo $rows['course_id'] .' - '.$rows['course_name']; ?></option>
                    <?php
                        }
                    ?>
                </select>
                <button type="submit" class="btn btn-primary" name="search_kdt">Hiển thị danh sách</button>
            </form>
        </div>
        </div>
        </div>
         <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Mã sinh viên</th>
                        <th>Tên sinh viên</th>
                        <th>Trường</th>
                        <th>Chi tiết</th>
                    </tr>
                    <?php
                if (isset($_GET['search_kdt'])) {
                    $abc = $_GET['list_dkt'];
                    $queryl="SELECT * FROM `point` INNER JOIN student ON `point`.st_id = `student`.st_id where course_id = $abc";
                    $result=mysqli_query($conn,$queryl) or die ("Loi truy van:".mysqli_error($conn));
                    while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        
            ?>
        <tr>
          <td><?php echo $rows['st_id']; ?></td>
          <td><?php echo $rows['st_name']; ?></td>
          <td><?php echo $rows['school_id']; ?></td>    
           <td><button type='button' class='btn btn-primary'><a href="../detail/detail.php?id_point=<?php echo $rows['id_point']; ?>">Chi tiết</a></button></td>
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
