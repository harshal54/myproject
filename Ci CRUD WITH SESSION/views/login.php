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
	<?php if(isset($_SESSION['danger'])){ ?>
			<div class="alert alert-danger"><?php echo $_SESSION['danger'];?></div>
			<?php }?>  
<div class="container container-fluid">
	<div class="col-md-4 m-auto">
		<form method="post" id="reg">
			<h1 class="text-center text-info">login Form</h1>
			
			<div class="form-group">
			<label>Name</label>
		<input type="text" name="name" placeholder="name"  class="form-control">
		
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="email"  class="form-control">
			
		</div>
		<button class="btn btn-primary" input type="submit" name="login" value="submit">login</button>
	
		</form>
		<script type="text/javascript">
			$(document).ready(function(){
             $("#reg").validate({

             	rules:{
                   name:{required:true},
                   email:{required:true},
             	},
             	messages:{
             		name:{required:"Name Field Must Be Required"},
             		email:{required:"Email Field Must Be Required"},	
             	}
             });

			});
</script> 
<style>.error{
color:red;}</style>
	</div>
</div>
</body>
</html>