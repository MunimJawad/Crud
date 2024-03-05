<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

</body>
</html>

<?php

$connection=mysqli_connect('localhost','root','','users');
if (!$connection) {
	die("Not connected".mysqli_error());
}


$results = mysqli_query( $connection, "SELECT * FROM user_info" );
		
?>
<h1 style="text-align: center;">USER INFO Table</h1>
<div>
	<a href="login.php"><button>Insert</button></a>
</div>
<table class="table">
	<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>EMail</th>
		<th>Action</th>
	</tr>
	</thead>

<?php
while ($row=mysqli_fetch_assoc( $results )) {
	
    $id=$row['id'];
    $username=$row['name'];
    $email=$row['email'];

    ?>  
        <tbody>
        <td><?php echo $id;  ?></td>
		<td><?php echo $username ; ?></td>
		<td><?php echo $email;  ?></td>
		<td><a href="delete.php?id=<?php echo"$id" ?>"><button>Delete</button></a> <a href="update.php?id=<?php echo"$id"?>"><button>Update</button></a></td>
		
		</tbody>

    <?php
}
?>
 </table>

<?php

?>

