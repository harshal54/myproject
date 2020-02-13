<?php
include_once 'database/connection.php';
include_once 'database/classes.php';

$obj=new InsertApi($db_con);

 $full_Name=$_REQUEST['full_Name'];
 $father_Name=$_REQUEST['father_Name'];
 $mother_Name=$_REQUEST['mother_Name'];
 $dob=$_REQUEST['dob'];
 $qualification=$_REQUEST['qualification'];
 $spouse_Name =$_REQUEST['spouse_Name'];
 $spouse_Dob =$_REQUEST['spouse_Dob'];
 $category =$_REQUEST['category'];
 $permanent_Address =$_REQUEST['permanent_Address'];
 $village=$_REQUEST['village'];
 $telsil=$_REQUEST['telsil']; 
 $post =$_REQUEST['post'];
 $dist =$_REQUEST['dist'];
 $state=$_REQUEST['state']; 
 $mobile=$_REQUEST['mobile']; 
 $phone =$_REQUEST['phone'];
 $email=$_REQUEST['email']; 
 $boys =$_REQUEST['boys'];
 $girls =$_REQUEST['girls'];
 $child_Edu1 =$_REQUEST['child_Edu1'];
 $child_Edu2=$_REQUEST['child_Edu2']; 
 $child_Edu3=$_REQUEST['child_Edu3']; 
 $crop_Type =$_REQUEST['crop_Type'];
 $soil_Test =$_REQUEST['soil_Test'];
 $soil_Type=$_REQUEST['soil_Type']; 
 $soil_Depth=$_REQUEST['soil_Depth']; 
 $water_Level=$_REQUEST['water_Level']; 
 $tree_On_Med =$_REQUEST['tree_On_Med'];
 $tree_In_Farm =$_REQUEST['tree_In_Farm'];
 $light_Type=$_REQUEST['light_Type']; 
 $light_Hour =$_REQUEST['light_Hour'];
 $interest=$_REQUEST['interest']; 
 $waterkua=$_REQUEST['waterkua']; 
 $watertubewell=$_REQUEST['watertubewell']; 
 $waternhar=$_REQUEST['waternhar']; 
 $waterndi=$_REQUEST['waterndi']; 
 $watertalab =$_REQUEST['watertalab'];
 $waterdrip=$_REQUEST['waterdrip']; 
 $wateranya=$_REQUEST['wateranya'];
 $machine=$_REQUEST['machine']; 
 $pesticide=$_REQUEST['pesticide']; 
 $protected_Farming=$_REQUEST['protected_Farming'];
 $storage=$_REQUEST['storage'];
 $farm_House=$_REQUEST['farm_House'];
 $godown=$_REQUEST['godown'];
 $labour_House=$_REQUEST['labour_House'];
 $path=$_REQUEST['path'];
 $near_By_Market=$_REQUEST['near_By_Market'];
 $transport=$_REQUEST['transport'];
 $khasra=$_REQUEST['khasra'];
 $halka=$_REQUEST['halka'];
 $small_Farm=$_REQUEST['small_Farm'];
 $medium_Farm=$_REQUEST['medium_Farm'];
 $large_Farm=$_REQUEST['large_Farm'];
 $irrigated_Land=$_REQUEST['irrigated_Land'];
 $non_Irrigated_Land=$_REQUEST['non_Irrigated_Land'];
 $selling_Center=$_REQUEST['selling_Center'];
 $cow=$_REQUEST['cow'];
 $buffelo=$_REQUEST['buffelo'];
 $goat=$_REQUEST['goat'];
 $other=$_REQUEST['other'];
 $cow_Breed=$_REQUEST['cow_Breed'];
 $buffelo_Breed=$_REQUEST['buffelo_Breed'];
 $dung_Land=$_REQUEST['dung_Land'];
 $dung_Land_Size=$_REQUEST['dung_Land_Size'];
 $shed=$_REQUEST['shed'];
 $shed_Type=$_REQUEST['shed_Type'];
 $shed_Size=$_REQUEST['shed_Size'];
 $milk_Producer=$_REQUEST['milk_Producer'];
 $milk_Uses=$_REQUEST['milk_Uses'];
 $near_By_Animal_Hospital=$_REQUEST['near_By_Animal_Hospital'];
 $animal_Insurance=$_REQUEST['animal_Insurance'];
 $income_Source=$_REQUEST['income_Source'];
 $annual_Income=$_REQUEST['annual_Income'];
 $bank_Name=$_REQUEST['bank_Name'];
 $Adhar_No=$_REQUEST['Adhar_No'];
 $place=$_REQUEST['place'];
 $date=$_REQUEST['date'];


$data=$obj->insertData(
 $full_Name,
 $father_Name,
 $mother_Name,
 $dob,
 $qualification,
 $spouse_Name ,
 $spouse_Dob ,
 $category ,
 $permanent_Address ,
 $village ,
 $telsil ,
 $post ,
 $dist ,
 $state, 
 $mobile ,
 $phone ,
 $email, 
 $boys ,
 $girls ,
 $child_Edu1 ,
 $child_Edu2, 
 $child_Edu3, 
 $crop_Type ,
 $soil_Test ,
 $soil_Type, 
 $soil_Depth, 
 $water_Level, 
 $tree_On_Med ,
 $tree_In_Farm ,
 $light_Type ,
 $light_Hour, 
 $interest, 
 $waterkua ,
 $watertubewell, 
 $waternhar, 
 $waterndi ,
 $watertalab ,
 $waterdrip ,
 $wateranya ,
 $machine ,
 $pesticide ,
 $protected_Farming,
 $storage,
 $farm_House,
 $godown,
 $labour_House,
 $path,
 $near_By_Market,
 $transport,
 $khasra,
 $halka,
 $small_Farm,
 $medium_Farm,
 $large_Farm,
 $irrigated_Land,
 $non_Irrigated_Land,
 $selling_Center,
 $cow,
 $buffelo,
 $goat,
 $other,
 $cow_Breed,
 $buffelo_Breed,
 $dung_Land,
 $dung_Land_Size,
 $shed,
 $shed_Type,
 $shed_Size,
 $milk_Producer,
 $milk_Uses,
 $near_By_Animal_Hospital,
 $animal_Insurance,
 $income_Source,
 $annual_Income,
 $bank_Name,
 $Adhar_No,
 $place,
 $date

);
  echo json_encode(array("data"=>$data));
  	


?>



