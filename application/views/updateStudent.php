<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
  
  
<div class="container">
  <form method="post" action="<?php echo base_url();?>updateData/<?php echo $res['id']; ?>"  enctype="multipart/form-data">
  
  <div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $res['name']; ?>"  required="" >
  </div>

  <div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?php echo $res['email']; ?>" readonly="">
  </div>

   <div class="form-group">
<label>Image</label>
<img src="<?php echo  base_url(); ?>upload/<?php echo $res['image']; ?>" style="width: 80px;height: 60px">
<input type="file" name="image" class="form-control">
  </div>

<div class="form-group">
<label>Course</label>
 
<select class="form-control" name="course" id="course" >

  <option>Select course</option>
  <?php foreach ($result as $resa){?>
  <option value="<?= $resa['id']?>"  <?php if($resa['id']==$res['course_id']) echo 'selected="selected"'; ?>><?php echo $resa['name']; ?></option>
<?php } ?>
</select>

  </div>
  <div class="form-group">
<label>Fees</label>
<input type="text" name="fees" class="form-control" id="fees" value="<?=$res['fees_id']?>" >
  </div>

  <div class="form-group">
<button type="submit" name="submit" class="btn btn-primary ">Update</button> 
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