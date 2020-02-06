<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$image=$_FILES["image"]["name"];
if($image){
	//echo "sgfhgh";die;
$image=$_FILES["image"]["name"];
$temp=$_FILES["image"]["tmp_name"];
$folder="upload/".basename($image);
 move_uploaded_file($temp,$folder);
}else{
$image=$_POST['hiddenimage'];
}
 $s="update crud set name='$name',email='$email',password='$password',mobile='$mobile',address='$address',image='$image' where id=$id";
 $query=mysqli_query($con,$s);
 if($query){
   $_SESSION['message']="RECORD UPDATED SUCCESFULLY";
   $_SESSION['msg_type']="info";
   header('location:display.php');
 }else{
echo '<script>alert("please check password!!")</script>';
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
</div> 
<div class="container">
	<div class="col-md-6">
		<form method="post" enctype="multipart/form-data" id="registration">
			<h1 class="text-center text-info">REGISTRATION FORM</h1>
			<div class="form-group">
			<label>NAME:</label>
			<input type="text"  class="form-control" id="name">
		</div>
		<div class="form-group">
			<label>EMAIL:</label>
			<input type="email" class="form-control" id="email">
		</div>
		<div class="form-group">
			<label>PASSWORD:</label>
			<input type="password"  class="form-control" id="password">
		</div>
		<div class="form-group">
			<label>MOBILE:</label>
			<input type="mobile"  class="form-control" id="mobile">
		</div>
		<div class="form-group">
			<label>ADDRESS:</label>
			<input type="text" class="form-control" id="address">
		</div>
		<div class="form-group">
			<label>IMAGE:</label>	
     
			<input type="file" class="form-control" id="image">
		</div>
		<button  type="submit" class="btn btn-success" name="submit" >update</button>
		

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