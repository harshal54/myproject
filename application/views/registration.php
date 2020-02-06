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
<div class="container container-fluid">
	<div class="col-md-4 m-auto">
		<form method="post" id="registration">
			<h1 class="text-center text-primary">Registration Form</h1>
			<?php if(isset($_SESSION['success'])){ ?>
			<div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
			<?php }?>   
			<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" id="name" placeholder="name" class="form-control" >
			
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" id="email" placeholder="email"  class="form-control">
			
		</div>
		
		<div class="form-group">
			<label>mobile</label>
			<input type="mobile" name="mobile" id="mobile" placeholder="mobile" class="form-control" >
			
		</div>
		<button class="btn btn-info" input type="submit" name="save" value="submit">submit</button>
		<a href="login"><h5>Already Have An Account !</h5></a>

		</form>
		<script type="text/javascript">
			$(document).ready(function(){
             $("#registration").validate({

             	rules:{
                   name:{required:true},
                   email:{required:true},
                   mobile:{required:true},
             	},
             	messages:{
             		name:{required:"Name Field Must Be Required"},
             		email:{required:"Email Field Must Be Required"},
             		mobile:{required:"Mobile Field Must Be Required"},
             	}
             });

			});
       
</script> 
<style>.error{color:red;}</style>
	</div>
</div>
</body>
</html>