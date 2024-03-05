
<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>

</body>
</html>

<?php 

$connection= mysqli_connect('localhost','root','','users');

    if(!$connection){
        die("Not connected".mysqli_error());
    }


    if(isset($_REQUEST['id'])){
    	$id = $_REQUEST['id'];

    	$query = "SELECT * FROM user_info WHERE id=$id"; 

    	$select_info = mysqli_query($connection, $query);

    	while ($row=mysqli_fetch_assoc($select_info)) {
    		
   ?>

   <form action="update_data.php" method='POST'>
    <input class="fm" type="text" name="username" value="<?php echo $row['name'] ; ?>" placeholder="name">
    <input class="fm" type="text" name="email" value="<?php echo $row['email'];?> placeholder="email">
    <input class="fm" type="submit" name="submit" value="Update">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
 </form>

   <?php 



    	}
    }

?>