   <?php
   
     $name=$_REQUEST['name'];
      $mobile= $_REQUEST['mobile'];
       $adhar= $_REQUEST['adhar'];

       require_once '../db/dbconfig.php';
       require_once '../db/dbOperation.php';
       $obj= new Admin($db_con);
      
    $data=$obj->ajaxcostumerData($name,$mobile,$adhar);
        
  ?>

                 <tr>
                        <th>ID</th>
                        <th>FULL NAME</th>
                        <th>FATHER NAME</th>
                        <th>DATE OF BIRTH</th>
                        <th>MOBILE NO</th>
                        <th>ANNUAL INCOME</th>
                        <th>ADHAR NO</th>
                        <th>OPTION</th>
                 </tr>

 
  <?php
      foreach ($data as $d)
     {
     	?>

                           <tr>
                                <td><?php echo $d['id'];?></td>
                                <td><?php echo $d['full_Name'];?></td>
                                <td><?php echo $d['father_Name'];?></td>
                                <td><?php echo $d['dob'];?></td>
                                <td><?php echo $d['mobile'];?></td>
                                <td><?php echo $d['annual_Income'].' rs';?></td>
                                <td><?php echo $d['Adhar_No'];?></td>
                                <td><a href="costumerprofile.php?id=<?php echo $d['id'];?>" class="fa fa-eye"></a></td>

                            </tr>

     	<?php
     }


?>
