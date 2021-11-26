
<div class="container">
  <form method="post" action= "<?php base_url() ?>InsertFees">
   <div class="form-group">
<label>Course</label>
 <select class="form-control" name="course" >
  <option>Select course</option>
 <?php
   $result=$this->db->get('course')->result_array();
foreach($result as $res){
  ?>
  <option value="<?php echo $res['id']; ?>"><?php echo $res['name']; ?></option>
<?php } ?>
</select>
  </div>
  <div class="form-group">
<label>Add Fees</label>
<input type="number" name="fees" class="form-control" placeholder="enter the Fees" required="">
  </div>
  <div class="form-group">
<input type="submit" name="submit" class="btn btn-primary">
  </div>
</form>
