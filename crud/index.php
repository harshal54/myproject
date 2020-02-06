<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$s="insert into user (name,email,mobile,password) values('$name','$email','$mobile','$password')";
	$query=mysqli_query($con,$s);
	if($query){
		echo '<script>alert("data inserted successfully")</script>';
		header('location:login.php');
	}else{
		echo '<script>alert("data not inserted")</script>';
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
			<h1 class="text-center text-success">Registration Form</h1>
			 <div class="form-group">
       <label>name:</label>
       <input type="name" class="form-control" name="name" required>
            </div>
            <div class="form-group">
       <label>email:</label>
       <input type="name" class="form-control" name="email" required>
            </div>
            <div class="form-group">
       <label>mobile:</label>
       <input type="name" class="form-control" name="mobile" required>
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