
<?php session_start();

if(isset($_SESSION['id'])){


	?>

<!DOCTYPE html>
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
<?php

include 'connection.php';
if (isset($_SESSION['message'])):?> 
<div class="text-center alert alert-<?= $_SESSION['msg_type'] ?> ">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div> 
<?php endif ?>
<div class="container">
<div class="col-md-12">
	
	<h1 class="text-center text-info">Home Page</h1>
	<h2 class="text-warning">Welcome <?php echo $_SESSION['name']; ?> How Are You !!</h2>
	<?php $_SESSION['id']; ?>
	<table class="table table-striped table-hover">
	<tr class="text-info text-center success">
		<th class="text-center">ID</th>
		<th class="text-center">NAME</th>
		<th class="text-center">EMAIL</th>
		<th class="text-center">PASSWORD</th>
		<th class="text-center">MOBILE</th>
		<th class="text-center">ADDRESS</th>
		<th class="text-center">IMAGE</th>
		<th colspan="3"  class="text-center" >ACTION</th>
	</tr>
	
	<?php

	$id = $_SESSION['id'];
	$s="select * from crud where id=$id";
	$query=mysqli_query($con,$s);
	while($value=mysqli_fetch_array($query)){
     ?>
    	<tr class="text-center">
    		<td><h4><?php echo $value['id'];?></h4></td>
    		<td><h4><?php echo $value['name'];?></h4></td>
    		<td><h4><?php echo $value['email'];?></h4></td>
    		<td><h4><?php echo $value['password'];?></h4></td>
    		<td><h4><?php echo $value['mobile'];?></h4></td>
    		<td><h4><?php echo $value['address'];?></h4></td>
    		<td><a><img src='upload/<?php echo $value["image"]?>' height="100" width="100"></a></td>
    		<td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $value['id']?>">DELETE</a></button></td>
    		<td><button class="btn btn-success"><a href="edit.php?id=<?php echo $value['id']?>">EDIT</a></button></td>
    		<td><button class="btn btn-info"><a href="index.php">INSERT</a></button></td>
    	</tr>
<?php    }
	?>
	</table>
<button class="btn btn-link"><a href="logout.php"><h3>LOGOUT</h3></a></button>
</div>
</div>
</body>
</html>

<?php }else{

header('location:login.php');

} ?>
