<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="container">
  <form method="post" action="<?php base_url(); ?>InsertStudent"  enctype="multipart/form-data">
  	
  <div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" placeholder="enter your name" required="">
  </div>

  <div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="enter your Email" required="">
  </div>

  <div class="form-group">
<label>Password</label>
<input type="text" name="password" class="form-control" placeholder="enter your Password" required="">
  </div>

   <div class="form-group">
<label>Image</label>
<input type="file" name="image" class="form-control" required="">
  </div>

<div class="form-group">
<label>Course</label>
 
<select class="form-control" name="course" id="course" >

  <option>Select course</option>
  <?php foreach ($result as $res){?>
  <option value="<?php echo $res['id']; ?>"><?php echo $res['name']; ?></option>
<?php } ?>
</select>

  </div>

  <div class="form-group">
<label>Fees</label>
<input type="text" name="fees" class="form-control" id="fees" readonly>
  </div>

  <div class="form-group">
<button type="submit" name="submit" class="btn btn-primary ">Add</button> 
  </div>
</div>
</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#course").change(function(){
var course_id=$(this).val();
$.ajax({
url:"<?= base_url('Mycontroller/getfees');?>",
method:"post",
dataType:'json',
data:{'courseID':course_id},
success:function(res)
{
  if(res.status ==1){
    $('#fees').val(res.data);
  }
}
});
});
});
</script>
</html>