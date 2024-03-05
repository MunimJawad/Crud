<?php

$connection=mysqli_connect('localhost','root','','users');
if (!$connection) {
	die("Not connected".mysqli_error());
}

$recv=$_REQUEST['id'];


$run_delete_query = mysqli_query($connection, "DELETE FROM user_info WHERE id=$recv" );
if (!$run_delete_query) {
	die("Not deleted".mysqli_error());
}

if($run_delete_query){
	header("location: read.php?deleted");
}
		
?>