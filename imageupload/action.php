<?php
//action.php
if(isset($_POST["action"]))
{
 $con = mysqli_connect("localhost", "admin", "123456789", "harshal");
 if($_POST["action"] == "fetch")
 {
  $query = "select  * from tbl_images";
  $result = mysqli_query($con, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th>ID</th>
     <th>Image</th>
     <th colspan="2">Action</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
     <td>'.$row["id"].'</td>
     <td>
    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="80" width="85" class="img-thumbnail"/>
     </td>
     <td><button class="btn btn-warning update" id="'.$row["id"].'">Update</button>
     <button class="btn btn-danger  delete" id="'.$row["id"].'">Delete</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "insert into tbl_images(name) values ('$file')";
  if(mysqli_query($con, $query))
  {
   echo 'Image Inserted into Database';
  }
 }
 if($_POST["action"] == "update")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "update tbl_images SET name = '$file' where id = '".$_POST["image_id"]."'";
  if(mysqli_query($con, $query))
  {
   echo 'Image Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "delete from tbl_images where id = '".$_POST["image_id"]."'";
  if(mysqli_query($con, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>