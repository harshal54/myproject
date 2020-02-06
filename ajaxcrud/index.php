<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ajax crud</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<form method="post" id="reg">
<div class="container">
	<h1 class="text-center text-info">AJAX CRUD</h1>
	<div class="d-flex justify-content-end">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create</button>
</div>
<h2 class="text-success">Records</h2>
<div id="records_contant">
</div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">AJAX CRUD</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
        	<label>NAME:</label>
        	<input type="text" id="name" placeholder="name" class="form-control">
        </div>
         <div class="form-group">
        	<label>EMAIL:</label>
        	<input type="email"  id="email" placeholder="email" class="form-control">
        </div>
         <div class="form-group">
        	<label>PASSWORD:</label>
        	<input type="text"  id="password" placeholder="password" class="form-control">
        </div>
         <div class="form-group">
        	<label>MOBILE:</label>
        	<input type="text" id="mobile" placeholder="mobile" class="form-control">
        </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"  onclick="addRecords()">Submit</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- update form -->
<div class="modal" id="update_user_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">AJAX CRUD</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
        	<label>NAME:</label>
        	<input type="text" name="" id="uname" class="form-control">
        </div>
         <div class="form-group">
        	<label>EMAIL:</label>
        	<input type="email" name="" id="uemail" class="form-control" >
        </div>
         <div class="form-group">
        	<label>PASSWORD:</label>
        	<input type="text" name="" id="upassword" class="form-control" >
        </div>
         <div class="form-group">
        	<label>MOBILE:</label>
        	<input type="text" name="" id="umobile"  class="form-control" >
        </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="updateuserdetails()">Update</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         <input type="hidden" id="hidden_user_id" name="">
      </div>
    </div>
  </div>
</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
      readRecords();
});
	function readRecords()
	{
		var readrecord="readrecord";
		$.ajax({
			url:"connection1.php",
			type:"post",
			data:{ readrecord:readrecord },
				success:function(data,status){
					$('#records_contant').html(data);
					//window.location.reload();
				}
		});
	}
	function addRecords(){
		var name=$('#name').val();
		var email=$('#email').val();
		var password=$('#password').val();
		var mobile=$('#mobile').val();
		$.ajax({
			url:"connection1.php",
			type:'post',
			data: {
				name:name,
				email:email,
				password:password,
				mobile:mobile
			},
			success:function(response){
					alert(response);
					readRecords();
					//window.location.reload();
				} 
		});
	}
	function deleteuser(deleteid){
      var conf=confirm("Are You Sure");
      if(conf==true){
      	$.ajax({
      		url:"connection1.php",
      		type:"post",
      		data:{ deleteid:deleteid },
      		success:function(response){
      			alert(response);
      			readRecords();
					
      		}
      	})
      }
	}
	function Getuserdetails(id){
		$('#hidden_user_id').val(id);

		$.post("connection1.php",{
			id:id
		},function(data,status){
      var user=JSON.parse(data);
      $('#uname').val(user.name);
      $('#uemail').val(user.email);
      $('#upassword').val(user.password);
      $('#umobile').val(user.mobile);
    
		}
		);
		$('.modal').modal("show");
	}
	function updateuserdetails(){
		var nameupd=$('#uname').val();
		var emailupd=$('#uemail').val();
		var passwordupd=$('#upassword').val();
		var mobileupd=$('#umobile').val();
           
	 	var hidden_user_idupd=$('#hidden_user_id').val();
		$.post("connection1.php",{
			hidden_user_idupd:hidden_user_idupd,
			nameupd:nameupd,
			emailupd:emailupd,
			passwordupd:passwordupd,
			mobileupd:mobileupd,
	 	},
	 	function(response){
	 		$('#update_user_modal').modal("hide");
	 		alert(response);
	 		readRecords();
		}
	 );
	}
</script>
</body>
</html>