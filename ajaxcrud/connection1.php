<?php 
include('connection.php');

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['mobile'])){

	 $name=$_POST['name'];
	  $email=$_POST['email'];
	   $password=$_POST['password'];
	    $mobile=$_POST['mobile'];

	$query="INSERT INTO test (name, email,password,mobile) VALUES ('$name', '$email', '$password', '$mobile')";
	$result = mysqli_query($con,$query);
	if($result){
		echo "Insert Successfully";
	}else{
		echo "Insert Failed";
	}
}
if(isset($_POST['readrecord'])){
        $query="select * from test";
        $result = mysqli_query($con,$query);
        ?>
  <table class="table table-striped table-bordered table-hover">
	<tr>
	<th>No.</th>
	<th>Name</th>
	<th>Email</th>
	<th>Password</th>
	<th>Mobile</th>
	<th colspan="2" class="text-center">Action</th>
	</tr>
  <?php 
       $number=1;
        while ($row = mysqli_fetch_array($result)) {
  ?>
        <tr>
      	<td><?php echo $number;?></td>
    		<td><?php echo $row['name'];?></td>
    		<td><?php echo $row['email'];?></td>
    		<td><?php echo $row['password'];?></td>
    		<td><?php echo $row['mobile'];?></td>
        <td> <button onclick="Getuserdetails('<?php echo $row['id'];?>')" class="btn  btn-warning">Edit</button>
		    <button onclick="deleteuser('<?php echo $row['id'];?>')" class="btn btn-danger">Delete</button></td>
		</tr>
  <?php
      	$number++;
   }
  ?>
    </table>
  <?php
    }
        if(isset($_POST['deleteid'])){
        	$id=$_POST['deleteid'];
        	$query="delete from test where id='$id'";
        	$res=mysqli_query($con,$query);
        	if($res){
        		echo "deleted successfully";
        	}else{
        		echo "deleted failed";
        	}
          }
          if(isset($_POST['id']) && isset($_POST['id']) !=""){
          	$id=$_POST['id'];
          	$query="select * from test where id=$id";
          	if(!$result=mysqli_query($con,$query)){
          		exit(mysqli_error());
          	}
          	$response=array();
          	if(mysqli_num_rows($result)>0){
          		while($row=mysqli_fetch_assoc($result)){
          			$response=$row;
          		}
          	}
          	else{
          		$response['status']=200;
          		$response['message']="data not found";
          	}
          	echo json_encode($response);
          }else{
          	$response['status']=200;
          	$response['message']="invalid request!";
          }
          if(isset($_POST['hidden_user_idupd'])){

            $hidden_user_idupd = $_POST['hidden_user_idupd'];
            $nameupd = $_POST['nameupd'];	
            $emailupd = $_POST['emailupd'];
            $passwordupd = $_POST['passwordupd'];
            $mobileupd = $_POST['mobileupd'];

            $query="UPDATE `test` SET `name` = '$nameupd', `email` = '$emailupd', `password` = '$passwordupd', `mobile` = '$mobileupd' WHERE `test`.`id` =$hidden_user_idupd;";
           $result= mysqli_query($con,$query);
           if($result){
           	echo "data updated successfully";
           }else{
           	echo "data not updated";
           }
            
          }
        ?>