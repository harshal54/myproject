<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.form{
		margin-left: 450px;
	}
</style>
<body>
<form action="" method="post" class="form">
	<div class="col-sm-6" class="container">
	<h1 class="text-center text-primary">Log in Page</h1>

	<?php if(isset($_SESSION['info'])){ ?>
			<div class="alert alert-info"><?php echo $_SESSION['info'];?></div>
	<?php }?>   
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

	<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
	</div>

	<div class="form-group">
    <label>Confirm Password:</label>
    <input type="password" name="password1" class="form-control"  placeholder="Confirm Password">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button><br>
	</div>
</form>
</body>
</html>