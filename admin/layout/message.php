<?php  if(isset($_SESSION["message"]) && $_SESSION['message']):?> 
	<div><?php echo $_SESSION['message']; $_SESSION['message'] = '';?>
<?php endif;?>
