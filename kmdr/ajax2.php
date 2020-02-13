 
 <?php
   
     $name=$_REQUEST['name'];

      $father_Name=$_REQUEST['father_Name'];
       $mother_Name=$_REQUEST['mother_Name'];
        $dob=$_REQUEST['dob'];
         $qualification=$_REQUEST['qualification'];
          $spouse_Name=$_REQUEST['spouse_Name'];
           $spouse_Dob=$_REQUEST['spouse_Dob'];
            $category=$_REQUEST['category'];
             $permanent_Address=$_REQUEST['permanent_Address'];
              $village=$_REQUEST['village'];
               $telsil=$_REQUEST['telsil'];
                $post=$_REQUEST['post'];
                 $dist=$_REQUEST['dist'];
                 $state=$_REQUEST['state'];
                 $mobile=$_REQUEST['mobile'];
                  $from_date=$_REQUEST['from_date'];
                 $to_date=$_REQUEST['to_date'];
                   

    
       require_once '../db/dbconfig.php';
       require_once '../db/dbOperation.php';

       $obj=new Admin($db_con);
       $data=$obj->costumerCheckedData($from_date,$to_date);
    
    ?>
    <tr>
      <?php

      if($name=='true')
      {
        ?>
         <th>FULLNAME</th>
        <?php
      }
       if($father_Name=='true')
      {
        ?>
         <th>father_Name</th>
        <?php
      }
        if($mother_Name=='true')
      {
        ?>
         <th>mother_Name</th>
        <?php
      }
        if($dob=='true')
      {
        ?>
         <th>dob</th>
        <?php
      }
        if($qualification=='true')
      {
        ?>
         <th>qualification</th>
        <?php
      }
        if($spouse_Name=='true')
      {
        ?>
         <th>spouse_Name</th>
        <?php
      }
        if($spouse_Dob=='true')
      {
        ?>
         <th>spouse_Dob</th>
        <?php
      }
        if($category=='true')
      {
        ?>
         <th>category</th>
        <?php
      }
        if($permanent_Address=='true')
      {
        ?>
         <th>permanent_Address</th>
        <?php
      }
        if($village=='true')
      {
        ?>
         <th>village</th>
        <?php
      }
        if($telsil=='true')
      {
        ?>
         <th>telsil</th>
        <?php
      }
         if($post=='true')
      {
        ?>
         <th>post</th>
        <?php
      }
        if($dist=='true')
      {
        ?>
         <th>dist</th>
        <?php
      }
        if($state=='true')
      {
        ?>
         <th>state</th>
        <?php
      }
        if($mobile=='true')
      {
        ?>
         <th>mobile</th>
        <?php
      }
         if($_REQUEST['phone']=='true')
      {
        ?>
         <th>phone</th>
        <?php
      }

       if($_REQUEST['email']=='true')
      {
        ?>
         <th>email</th>
        <?php
      }

       if($_REQUEST['boys']=='true')
      {
        ?>
         <th>boys</th>
        <?php
      }

       if($_REQUEST['girls']=='true')
      {
        ?>
         <th>girls</th>
        <?php
      }

       if($_REQUEST['child_Edu1']=='true')
      {
        ?>
         <th>child_Edu1</th>
        <?php
      }

       if($_REQUEST['child_Edu2']=='true')
      {
        ?>
         <th>child_Edu2</th>
        <?php
      }

       if($_REQUEST['child_Edu3']=='true')
      {
        ?>
         <th>child_Edu3</th>
        <?php
      }

       if($_REQUEST['crop_Type']=='true')
      {
        ?>
         <th>crop_Type</th>
        <?php
      }

       if($_REQUEST['soil_Test']=='true')
      {
        ?>
         <th>soil_Test</th>
        <?php
      }
      
         if($_REQUEST['soil_Type']=='true')
      {
        ?>
         <th>soil_Type</th>
        <?php
      }

          if($_REQUEST['soil_Depth']=='true')
      {
        ?>
         <th>soil_Depth</th>
        <?php
      }
      
        if($_REQUEST['water_Level']=='true')
      {
        ?>
         <th>water_Level</th>
        <?php
      }

         if($_REQUEST['tree_On_Med']=='true')
      {
        ?>
         <th>tree_On_Med</th>
        <?php
      }

         if($_REQUEST['tree_In_Farm']=='true')
      {
        ?>
         <th>tree_In_Farm</th>
        <?php
      }

         if($_REQUEST['light_Hour']=='true')
      {
        ?>
         <th>light_Hour</th>
        <?php
      }

         if($_REQUEST['interest']=='true')
      {
        ?>
         <th>interest</th>
        <?php
      }

         if($_REQUEST['waterkua']=='true')
      {
        ?>
         <th>waterkua</th>
        <?php
      }

         if($_REQUEST['watertubewell']=='true')
      {
        ?>
         <th>watertubewell</th>
        <?php
      }

         if($_REQUEST['waternhar']=='true')
      {
        ?>
         <th>waternhar</th>
        <?php
      }

         if($_REQUEST['waterndi']=='true')
      {
        ?>
         <th>waterndi</th>
        <?php
      }

         if($_REQUEST['watertalab']=='true')
      {
        ?>
         <th>watertalab</th>
        <?php
      }

         if($_REQUEST['waterdrip']=='true')
      {
        ?>
         <th>waterdrip</th>
        <?php
      }

         if($_REQUEST['wateranya']=='true')
      {
        ?>
         <th>wateranya</th>
        <?php
      }

         if($_REQUEST['machine']=='true')
      {
        ?>
         <th>machine</th>
        <?php
      }

         if($_REQUEST['pesticide']=='true')
      {
        ?>
         <th>pesticide</th>
        <?php
      }

         if($_REQUEST['protected_Farming']=='true')
      {
        ?>
         <th>protected_Farming</th>
        <?php
      }

         if($_REQUEST['storage']=='true')
      {
        ?>
         <th>storage</th>
        <?php
      }

         if($_REQUEST['farm_House']=='true')
      {
        ?>
         <th>farm_House</th>
        <?php
      }

         if($_REQUEST['godown']=='true')
      {
        ?>
         <th>godown</th>
        <?php
      }

         if($_REQUEST['light_Type']=='true')
      {
        ?>
         <th>light_Type</th>
        <?php
      }

         if($_REQUEST['labour_House']=='true')
      {
        ?>
         <th>labour_House</th>
        <?php
      }

         if($_REQUEST['path']=='true')
      {
        ?>
         <th>path</th>
        <?php
      }

         if($_REQUEST['near_By_Market']=='true')
      {
        ?>
         <th>near_By_Market</th>
        <?php
      }

         if($_REQUEST['transport']=='true')
      {
        ?>
         <th>transport</th>
        <?php
      }

         if($_REQUEST['khasra']=='true')
      {
        ?>
         <th>khasra</th>
        <?php
      }

         if($_REQUEST['halka']=='true')
      {
        ?>
         <th>halka</th>
        <?php
      }

         if($_REQUEST['small_Farm']=='true')
      {
        ?>
         <th>small_Farm</th>
        <?php
      }

         if($_REQUEST['medium_Farm']=='true')
      {
        ?>
         <th>medium_Farm</th>
        <?php
      }

         if($_REQUEST['large_Farm']=='true')
      {
        ?>
         <th>large_Farm</th>
        <?php
      }

         if($_REQUEST['irrigated_Land']=='true')
      {
        ?>
         <th>irrigated_Land</th>
        <?php
      }

         if($_REQUEST['non_Irrigated_Land']=='true')
      {
        ?>
         <th>non_Irrigated_Land</th>
        <?php
      }

         if($_REQUEST['selling_Center']=='true')
      {
        ?>
         <th>selling_Center</th>
        <?php
      }

         if($_REQUEST['cow']=='true')
      {
        ?>
         <th>cow</th>
        <?php
      }

         if($_REQUEST['buffelo']=='true')
      {
        ?>
         <th>buffelo</th>
        <?php
      }

         if($_REQUEST['goat']=='true')
      {
        ?>
         <th>goat</th>
        <?php
      }

         if($_REQUEST['other']=='true')
      {
        ?>
         <th>other</th>
        <?php
      }

         if($_REQUEST['cow_Breed']=='true')
      {
        ?>
         <th>cow_Breed</th>
        <?php
      }
      
           if($_REQUEST['buffelo_Breed']=='true')
      {
        ?>
         <th>buffelo_Breed</th>
        <?php
      }

           if($_REQUEST['dung_Land']=='true')
      {
        ?>
         <th>dung_Land</th>
        <?php
      }

           if($_REQUEST['dung_Land_Size']=='true')
      {
        ?>
         <th>dung_Land_Size</th>
        <?php
      }

           if($_REQUEST['shed']=='true')
      {
        ?>
         <th>shed</th>
        <?php
      }

           if($_REQUEST['shed_Type']=='true')
      {
        ?>
         <th>shed_Type</th>
        <?php
      }

           if($_REQUEST['shed_Size']=='true')
      {
        ?>
         <th>shed_Size</th>
        <?php
      }

           if($_REQUEST['milk_Producer']=='true')
      {
        ?>
         <th>milk_Producer</th>
        <?php
      }

           if($_REQUEST['milk_Uses']=='true')
      {
        ?>
         <th>milk_Uses</th>
        <?php
      }

           if($_REQUEST['near_By_Animal_Hospital']=='true')
      {
        ?>
         <th>Animal_Hospital</th>
        <?php
      }

           if($_REQUEST['animal_Insurance']=='true')
      {
        ?>
         <th>animal_Insurance</th>
        <?php
      }

           if($_REQUEST['income_Source']=='true')
      {
        ?>
         <th>income_Source</th>
        <?php
      }

           if($_REQUEST['annual_Income']=='true')
      {
        ?>
         <th>annual_Income</th>
        <?php
      }

           if($_REQUEST['bank_Name']=='true')
      {
        ?>
         <th>bank_Name</th>
        <?php
      }

           if($_REQUEST['Adhar_No']=='true')
      {
        ?>
         <th>Adhar_No</th>
        <?php
      }

           if($_REQUEST['place']=='true')
      {
        ?>
         <th>place</th>
        <?php
      }

           if($_REQUEST['date']=='true')
      {
        ?>
         <th>date</th>
        <?php
      }

      ?>
    </tr>

    <?php
  
   foreach ($data as $d)
   {
   
   
  ?>
   <tr>
      <?php

      if($name=='true')
      {
        ?>
         
         <td><?php echo $d['full_Name']; ?></td>
        <?php
      }
       if($father_Name=='true')
      {
        ?>
         <td><?php echo $d['father_Name']; ?></td>
        <?php
      }
        if($mother_Name=='true')
      {
        ?>
         <td><?php echo $d['mother_Name']; ?></td>
        <?php
      }
        if($dob=='true')
      {
        ?>
         <td><?php echo $d['dob']; ?></td>
        <?php
      }
        if($qualification=='true')
      {
        ?>
         <td><?php echo $d['qualification']; ?></td>
        <?php
      }
        if($spouse_Name=='true')
      {
        ?>
         <td><?php echo $d['spouse_Name']; ?></td>
        <?php
      }
        if($spouse_Dob=='true')
      {
        ?>
         <td><?php echo $d['spouse_Dob']; ?></td>
        <?php
      }
        if($category=='true')
      {
        ?>
         <td><?php echo $d['category']; ?></td>
        <?php
      }
        if($permanent_Address=='true')
      {
        ?>
         <td><?php echo $d['permanent_Address']; ?></td>
        <?php
      }
        if($village=='true')
      {
        ?>
         <td><?php echo $d['village']; ?></td>
        <?php
      }
        if($telsil=='true')
      {
        ?>
         <td><?php echo $d['telsil']; ?></td>
        <?php
      }
         if($post=='true')
      {
        ?>
         <td><?php echo $d['post']; ?></td>
        <?php
      }
        if($dist=='true')
      {
        ?>
         <td><?php echo $d['dist']; ?></td>
        <?php
      }
        if($state=='true')
      {
        ?>
         <td><?php echo $d['state']; ?></td>
        <?php
      }
        if($mobile=='true')
      {
        ?>
         <td><?php echo $d['mobile']; ?></td>
        <?php
      }
      
       if($_REQUEST['phone']=='true')
      {
        ?>
         <td><?php echo $d['phone']; ?></td>
        <?php
      }

       if($_REQUEST['email']=='true')
      {
        ?>
         <td><?php echo $d['email']; ?></td>
        <?php
      }

       if($_REQUEST['boys']=='true')
      {
        ?>
         <td><?php echo $d['boys']; ?></td>
        <?php
      }

       if($_REQUEST['girls']=='true')
      {
        ?>
         <td><?php echo $d['girls']; ?></td>
        <?php
      }

       if($_REQUEST['child_Edu1']=='true')
      {
        ?>
         <td><?php echo $d['child_Edu1']; ?></td>
        <?php
      }

       if($_REQUEST['child_Edu2']=='true')
      {
        ?>
         <td><?php echo $d['child_Edu2']; ?></td>
        <?php
      }

       if($_REQUEST['child_Edu3']=='true')
      {
        ?>
         <td><?php echo $d['child_Edu3']; ?></td>
        <?php
      }

       if($_REQUEST['crop_Type']=='true')
      {
        ?>
         <td><?php echo $d['crop_Type']; ?></td>
        <?php
      }

       if($_REQUEST['soil_Test']=='true')
      {
        ?>
         <td><?php echo $d['soil_Test']; ?></td>
        <?php
      }
      
         if($_REQUEST['soil_Type']=='true')
      {
        ?>
         <td><?php echo $d['soil_Type']; ?></td>
        <?php
      }

          if($_REQUEST['soil_Depth']=='true')
      {
        ?>
         <td><?php echo $d['soil_Depth']; ?></td>
        <?php
      }
      
         if($_REQUEST['water_Level']=='true')
      {
        ?>
         <td><?php echo $d['water_Level']; ?></td>
        <?php
      }

         if($_REQUEST['tree_On_Med']=='true')
      {
        ?>
         <td><?php echo $d['tree_On_Med']; ?></td>
        <?php
      }

         if($_REQUEST['tree_In_Farm']=='true')
      {
        ?>
         <td><?php echo $d['tree_In_Farm']; ?></td>
        <?php
      }

         if($_REQUEST['light_Hour']=='true')
      {
        ?>
         <td><?php echo $d['light_Hour']; ?></td>
        <?php
      }

         if($_REQUEST['interest']=='true')
      {
        ?>
         <td><?php echo $d['interest']; ?></td>
        <?php
      }

         if($_REQUEST['waterkua']=='true')
      {
        ?>
         <td><?php echo $d['waterkua']; ?></td>
        <?php
      }

         if($_REQUEST['watertubewell']=='true')
      {
        ?>
         <td><?php echo $d['watertubewell']; ?></td>
        <?php
      }

         if($_REQUEST['waternhar']=='true')
      {
        ?>
         <td><?php echo $d['waternhar']; ?></td>
        <?php
      }

         if($_REQUEST['waterndi']=='true')
      {
        ?>
         <td><?php echo $d['waterndi']; ?></td>
        <?php
      }

         if($_REQUEST['watertalab']=='true')
      {
        ?>
         <td><?php echo $d['watertalab']; ?></td>
        <?php
      }

         if($_REQUEST['waterdrip']=='true')
      {
        ?>
         <td><?php echo $d['waterdrip']; ?></td>
        <?php
      }

         if($_REQUEST['wateranya']=='true')
      {
        ?>
         <td><?php echo $d['wateranya']; ?></td>
        <?php
      }

         if($_REQUEST['machine']=='true')
      {
        ?>
         <td><?php echo $d['machine']; ?></td>
        <?php
      }

         if($_REQUEST['pesticide']=='true')
      {
        ?>
         <td><?php echo $d['pesticide']; ?></td>
        <?php
      }

         if($_REQUEST['protected_Farming']=='true')
      {
        ?>
         <td><?php echo $d['protected_Farming']; ?></td>
        <?php
      }

         if($_REQUEST['storage']=='true')
      {
        ?>
         <td><?php echo $d['storage']; ?></td>
        <?php
      }

         if($_REQUEST['farm_House']=='true')
      {
        ?>
         <td><?php echo $d['farm_House']; ?></td>
        <?php
      }

         if($_REQUEST['godown']=='true')
      {
        ?>
         <td><?php echo $d['godown']; ?></td>
        <?php
      }
     

         if($_REQUEST['light_Type']=='true')
      {
        ?>
         <td><?php echo $d['light_Type']; ?></td>
        <?php
      }

         if($_REQUEST['labour_House']=='true')
      {
        ?>
         <td><?php echo $d['labour_House']; ?></td>
        <?php
      }

         if($_REQUEST['path']=='true')
      {
        ?>
         <td><?php echo $d['path']; ?></td>
        <?php
      }

         if($_REQUEST['near_By_Market']=='true')
      {
        ?>
         <td><?php echo $d['near_By_Market']; ?></td>
        <?php
      }

         if($_REQUEST['transport']=='true')
      {
        ?>
         <td><?php echo $d['transport']; ?></td>
        <?php
      }

         if($_REQUEST['khasra']=='true')
      {
        ?>
         <td><?php echo $d['khasra']; ?></td>
        <?php
      }

         if($_REQUEST['halka']=='true')
      {
        ?>
         <td><?php echo $d['halka']; ?></td>
        <?php
      }

         if($_REQUEST['small_Farm']=='true')
      {
        ?>
         <td><?php echo $d['small_Farm']; ?></td>
        <?php
      }

         if($_REQUEST['medium_Farm']=='true')
      {
        ?>
         <td><?php echo $d['medium_Farm']; ?></td>
        <?php
      }

         if($_REQUEST['large_Farm']=='true')
      {
        ?>
         <td><?php echo $d['large_Farm']; ?></td>
        <?php
      }

         if($_REQUEST['irrigated_Land']=='true')
      {
        ?>
         <td><?php echo $d['irrigated_Land']; ?></td>
        <?php
      }

         if($_REQUEST['non_Irrigated_Land']=='true')
      {
        ?>
         <td><?php echo $d['non_Irrigated_Land']; ?></td>
        <?php
      }

         if($_REQUEST['selling_Center']=='true')
      {
        ?>
         <td><?php echo $d['selling_Center']; ?></td>
        <?php
      }

         if($_REQUEST['cow']=='true')
      {
        ?>
         <td><?php echo $d['cow']; ?></td>
        <?php
      }

         if($_REQUEST['buffelo']=='true')
      {
        ?>
         <td><?php echo $d['buffelo']; ?></td>
        <?php
      }

         if($_REQUEST['goat']=='true')
      {
        ?>
         <td><?php echo $d['goat']; ?></td>
        <?php
      }

         if($_REQUEST['other']=='true')
      {
        ?>
         <td><?php echo $d['other']; ?></td>
        <?php
      }
      
         if($_REQUEST['cow_Breed']=='true')
      {
        ?>
         <td><?php echo $d['cow_Breed']; ?></td>
        <?php
      }
      
           if($_REQUEST['buffelo_Breed']=='true')
      {
        ?>
         <td><?php echo $d['buffelo_Breed']; ?></td>
        <?php
      }

           if($_REQUEST['dung_Land']=='true')
      {
        ?>
         <td><?php echo $d['dung_Land']; ?></td>
        <?php
      }

           if($_REQUEST['dung_Land_Size']=='true')
      {
        ?>
         <td><?php echo $d['dung_Land_Size']; ?></td>
        <?php
      }

           if($_REQUEST['shed']=='true')
      {
        ?>
         <td><?php echo $d['shed']; ?></td>
        <?php
      }

           if($_REQUEST['shed_Type']=='true')
      {
        ?>
         <td><?php echo $d['shed_Type']; ?></td>
        <?php
      }

           if($_REQUEST['shed_Size']=='true')
      {
        ?>
         <td><?php echo $d['shed_Size']; ?></td>
        <?php
      }

           if($_REQUEST['milk_Producer']=='true')
      {
        ?>
         <td><?php echo $d['milk_Producer']; ?></td>
        <?php
      }

           if($_REQUEST['milk_Uses']=='true')
      {
        ?>
         <td><?php echo $d['milk_Uses']; ?></td>
        <?php
      }

           if($_REQUEST['near_By_Animal_Hospital']=='true')
      {
        ?>
         <td><?php echo $d['near_By_Animal_Hospital']; ?></td>
        <?php
      }

           if($_REQUEST['animal_Insurance']=='true')
      {
        ?>
         <td><?php echo $d['animal_Insurance']; ?></td>
        <?php
      }

           if($_REQUEST['income_Source']=='true')
      {
        ?>
         <td><?php echo $d['income_Source']; ?></td>
        <?php
      }

           if($_REQUEST['annual_Income']=='true')
      {
        ?>
         <td><?php echo $d['annual_Income']; ?></td>
        <?php
      }

           if($_REQUEST['bank_Name']=='true')
      {
        ?>
         <td><?php echo $d['bank_Name']; ?></td>
        <?php
      }

           if($_REQUEST['Adhar_No']=='true')
      {
        ?>
         <td><?php echo $d['Adhar_No']; ?></td>
        <?php
      }

           if($_REQUEST['place']=='true')
      {
        ?>
         <td><?php echo $d['place']; ?></td>
        <?php
      }

           if($_REQUEST['date']=='true')
      {
        ?>
         <td><?php echo $d['date']; ?></td>
        <?php
      }

      ?>
    </tr>
  <?php

   }
   ?>