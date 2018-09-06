<?php
$conn = mysqli_connect("localhost", "root", "", "quanlyhocvien");
mysqli_set_charset($conn, 'UTF8'); 

if(!$conn){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}else{
 
    echo "";
}