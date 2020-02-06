<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$image=$_FILES["image"]["name"];
$temp=$_FILES["image"]["tmp_name"];
$folder="upload/".basename($image);
 move_uploaded_file($temp,$folder);
$s="insert into crud (name,email,password,mobile,address,image) values('$name','$email','$password','$mobile','$address','$image')";
$query=mysqli_query($con,$s);
if($query){
	$_SESSION['message']="REGISTRATION SUCCESSFULLY";
    $_SESSION['msg_type']="success"; 
}
else
{
echo '<script>alert("data not inserted")</script>';
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>
<body>
	
	<?php
include 'connection.php';

if (isset($_SESSION['message'])):?> 
<div class=" text-center alert alert-<?=$_SESSION['msg_type'] ?> alert-dismissible fade in">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div> 
<?php endif ?>
</div> 
<div class="container container-fluid">
	<div class="col-md-4 m-auto">
		<form method="post" enctype="multipart/form-data" id="registration">
			<h1 class="text-center text-info">Registration Form</h1>
			<div class="form-group">
			<label>NAME:</label>
			<input type="text" name="name" placeholder="name" class="form-control" id="name">
		</div>
		<div class="form-group">
			<label>EMAIL:</label>
			<input type="email" name="email" placeholder="email" class="form-control" id="email">
		</div>
		<div class="form-group">
			<label>PASSWORD:</label>
			<input type="text" name="password" placeholder="password" class="form-control" id="password">
		</div>
		<div class="form-group">
			<label>MOBILE:</label>
			<input type="mobile" name="mobile" placeholder="mobile" class="form-control" id="mobile">
		</div>
		<div class="form-group">
			<label>ADDRESS:</label>
			<input type="text" name="address" placeholder="adress" class="form-control" id="address">
		</div>
		<div class="form-group">
			<label>IMAGE:</label>
			<input type="file" name="image" class="form-control" id="image">
		</div>
		<button  type="submit" class="btn btn-success" name="submit" >register</button>
		<a href="login.php"><h5>Already have An Accout</h5></a>

		</form>
		<script type="text/javascript">
			$(document).ready(function(){
             $("#registration").validate({

             	rules:{
                   name:{required:true},
                   email:{required:true},
                   password:{required:true},
                   mobile:{required:true},
                   address:{required:true},
                   image:{required:true},
             	},
             	messages:{
             		name:{required:"name is required"},
             		email:{required:"email is required"},
             		password:{required:"password is required"},
             		mobile:{required:"mobile is required"},
             		address:{required:"address is required"},
             		image:{required:"image is required"},
             	}
             });

			});
 
</script> 

	</div>
</div>
</body>
</html>