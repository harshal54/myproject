<?php
include 'connection.php';
if(isset($_SESSION['id'])){
	header('location:display.php');
}else{
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

	$s="select * from crud where email='$email' and password='$password'";
	$query=mysqli_query($con,$s);
	$row=mysqli_fetch_array($query);
	$id=$row['id'];
	$name=$row['name'];
	$num=mysqli_num_rows($query);
     if ($num == 1) {
    $_SESSION['name']=$name;
     $_SESSION['id']=$id;
    header("location:display.php"); 
} else {
 $_SESSION['message']="INVALID LOGIN";
  $_SESSION['msg_type']="danger";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['message'])):?> 
<div class=" text-center alert alert-<?=$_SESSION['msg_type'] ?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div> 
<?php endif ?>
</div> 
<div class="container">
	<div class="col-md-6">
		<form method="post">
			<h1 class="text-center text-info">LOG IN FORM</h1>
			
			
		<div class="form-group">
			<label>EMAIL:</label>
			<input type="text" name="email" placeholder="email" class="form-control">
		</div>
		<div class="form-group">
			<label>PASSWORD:</label>
			<input type="text" name="password" placeholder="password" class="form-control">
		</div>
		
		<button class="btn btn-success" name="submit">LOGIN</button>
		</form>
	</div>
</div>
</body>
</html>
<?php }?>
