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
  $i=1;
  foreach($harshal as $row)
  {
  ?>
<div class="container container-fluid">
	<div class="col-md-4 m-auto">
		<form method="post">
			<h1 class="text-center text-info">Registration Form</h1>
			<div class="form-group">
			<label>NAME:</label>
			<input type="text" name="name"  class="form-control" value="<?php echo $row->name; ?>" >
		</div>
		<div class="form-group">
			<label>EMAIL:</label>
			<input type="email" name="email" class="form-control" value="<?php echo $row->email; ?>">
		</div>
		
		<div class="form-group">
			<label>MOBILE:</label>
			<input type="mobile" name="mobile" class="form-control" value="<?php echo $row->mobile; ?>">
		</div>
		<button class="btn btn-success" name="update"  value="Update Records">update</button>
		<!-- <a href="login.php"><h5>Already have An Accout</h5></a> -->

		</form>
		
	</div>
</div>
<?php } ?>
</body>
</html>