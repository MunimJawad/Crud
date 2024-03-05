<?php 
 $connection= mysqli_connect('localhost','root','','users');

    if(!$connection){
        die("Not connected".mysqli_error());
    }

    if (isset($_REQUEST['submit'])) {
    	// code...

    	$name= $_REQUEST['username'];
    	$email = $_REQUEST['email'];
    	$id= $_REQUEST['id'];

    	$query = "UPDATE user_info SET name='$name',email='$email' WHERE id=$id";
    	$result = mysqli_query($connection, $query);

    	if ($result) {
    		// code...
    		header("location: read.php?updated");
    	}
    }

 ?>