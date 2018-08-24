<?php
$conn = mysqli_connect("localhost", "root", "", "quanlyhocvien");
mysqli_set_charset($conn, 'UTF8');

if (!$conn) {
    echo "Kết nối không thành công";
}
echo '<br>';