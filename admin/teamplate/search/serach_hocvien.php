<?php 


  include "../connect.php";

  $output = '';

  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

    $query = mysqli_query("SELECT * FROM student WHERE st_name LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);
    
    if($count == 0){
      $output = "There was no search results!";

    }else{

      while ($row = mysqli_fetch_array($query)) {

        $name = $_POST["st_name"];
		$date = $_POST["st_date"];
		$gender = $_POST["st_gender"];
		$phone = $_POST["st_phone"];
		$email= $_POST["st_email"];
		$skype = $_POST["st_skype"];
		$address = $_POST["st_address"];
		$sc = $_POST["school_id"];

        $output .='<div> '.$name.''.$date.''.$gender.''.$phone.''.$email.''.$skype.''.$address.''.$sc.'</div>';

      }

    }
  }


 ?>