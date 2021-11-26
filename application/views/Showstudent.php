<?php if(isset($_SESSION['danger'])){ ?>
      <div class="alert alert-danger text-center"><?php echo $_SESSION['danger'];?></div>
  <?php }?> 
<table id="user_tabel" class="table table-bordered table-hover ">
    <tr class="text-center">
      <th class="text-center">ID</th>
      <th class="text-center">Name</th>
      <th class="text-center">Email</th>
      <th class="text-center">Image</th>
      <th class="text-center">Action</th>
    </tr>
    <?php   $i=1; foreach($result as $res){ ?>
     
    <tr class="text-center">
      <th><?php echo $i; ?></th>
      <td><?php echo $res['name']; ?></td>
      <td><?php echo $res['email']; ?></td>
      <td><a><img src='<?php echo  base_url(); ?>upload/<?php echo $res['image']; ?>' height="50" width="50"></a></td>
      <td><button class="btn btn-danger " onclick="return confirm('Are you sure to delete data?')"><a href="<?php base_url(); ?>deleteStudent/<?php echo base64_encode($res['id']); ?>">Delete</a></button>
      <button class="btn btn-success"><a href="<?php base_url(); ?>updateStudent/<?php echo base64_encode($res['id']); ?>">Update</a></button></td>
    <?php  $i++; } ?>
    </tr>
    
</table>