<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>
<form action="login.php" method='POST'>
    <input class="fm" type="text" name="username" placeholder="name">
    <input class="fm" type="text" name="email" placeholder="email">
    <input class="fm" type="submit" name="submit">
 </form>
</body>
</html>

 <?php 
 
 if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];

   if($username && $email){

    $connection= mysqli_connect('localhost','root','','users');

    if(!$connection){
        die("Not connected".mysqli_error());
    }

    $query="INSERT INTO `user_info`( name,email ) VALUES ('$username','$email')";
    $result=mysqli_query($connection,$query);

     if(!$result){
      die("Not inserted".mysqli_error());
     }

    }
 }
 
 ?>
 
 
 
 