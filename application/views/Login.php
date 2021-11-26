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

	<?php if(isset($_SESSION['success'])){ ?>
			<div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
	<?php }?>   

	<?php if(isset($_SESSION['danger'])){ ?>
	         <div class="alert alert-danger"><?php echo $_SESSION['danger'];?></div>
	<?php }?> 
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

	<div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
	</div>

	<div class="form-group">
    <label>Password:</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Your Password">
	</div>
      <a href="forgotpassword">Forgotten Password ?</a>
      <a href="createnewaccount" id="acc" class="btn btn-primary">Create New Account</a><br><br>
	<button type="submit" class="btn btn-info">LOG IN</button><br>
	</div>
</form>
</body>
</html>
<style type="text/css">
	#acc{
		float: right;
	}

</style>