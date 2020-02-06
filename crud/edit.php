<?php
include 'connection.php';
$id=$_GET['id'];
$s="select * from user where id=$id";
$query=mysqli_query($con,$s);
while ($res=mysqli_fetch_array($query)) {
	$id=$res['id'];
	$name=$res['name'];
	$email=$res['email'];
	$mobile=$res['mobile'];
	$password=$res['password'];
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
		<form method="post" action="update.php?id=<?php echo $id ?>">
			<h1 class="text-center text-info">Update Form</h1>
			 <div class="form-group">
       <label>name:</label>
       <input type="name" class="form-control" name="name" value="<?php echo $name ?>" >
            </div>
            <div class="form-group">
       <label>email:</label>
       <input type="name" class="form-control"  name="email" value="<?php echo $email ?>" >
            </div>
            <div class="form-group">
       <label>mobile:</label>
       <input type="name" class="form-control" name="mobile" value="<?php echo $mobile?>"  >
            </div>
            <div class="form-group">
       <label>password:</label>
       <input type="name" class="form-control"  name="password" value="<?php echo $password ?>" >
            </div>
            <button class="btn btn-primary" name="submit">UPDATE</button>
		</form>
</div>
</div>


	</body>
</html>