<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$password=$_POST['password'];
$s="select * from user where name='$name' and password='$password'";
$query=mysqli_query($con,$s);
if($query){
echo '<script>alert("LOG IN SUCCESSFULLY")</script>';
header('location:display.php');
}else{
echo '<script>alert("LOG in failed")</script>';
header('location:login.php');
}
}
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="col-md-6">
		<form method="post">
			<h1 class="text-center text-success">LOG IN Form</h1>
			 <div class="form-group">
       <label>name:</label>
       <input type="name" class="form-control" name="name" required>
            </div>
          
            <div class="form-group">
       <label>password:</label>
       <input type="name" class="form-control" name="password" required>
            </div>
            <button class="btn btn-primary" name="submit">submit</button>
		</form>
</div>
</div>


	</body>
</html>