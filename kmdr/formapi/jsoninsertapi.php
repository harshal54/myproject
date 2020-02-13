<?php
include_once 'database/connection.php';
include_once 'database/classes.php';

$obj=new InsertApi($db_con);
 $jsondata=file_get_contents('php://input');
  $Cdata=json_decode($jsondata,true);
 
$worker_id=$Cdata['workerId'];
$full_Name=$Cdata['fullName'];
$father_Name=$Cdata['fatherName'];
$mother_Name=$Cdata['motherName'];
$dob=$Cdata['dob'];
$qualification=$Cdata['qualification'];
$spouse_Name=$Cdata['spouseName'];
$spouse_Dob=$Cdata['spouseDob'];
$category=$Cdata['category'];
$permanent_Address=$Cdata['permanentAddress'];
$village=$Cdata['village'];
$telsil=$Cdata['telsil'];
$post=$Cdata['post'];
$dist=$Cdata['dist'];
$state=$Cdata['state'];
$mobile=$Cdata['mobile'];
$phone=$Cdata['phone'];
$email=$Cdata['email'];
$boys=$Cdata['boys'];
$girls=$Cdata['girls'];
$child_Edu1=$Cdata['childEdu1'];
$child_Edu2=$Cdata['childEdu2'];
$child_Edu3=$Cdata['childEdu3'];
$crop_Type=$Cdata['cropType'];
$soil_Test=$Cdata['soilTest'];
$soil_Type=$Cdata['soilType'];
$soil_Depth=$Cdata['soilDepth'];
$water_Level=$Cdata['waterLevel'];
$tree_On_Med=$Cdata['treeOnMed'];
$tree_In_Farm=$Cdata['treeInFarm'];
$light_Type=$Cdata['lightType'];
$light_Hour=$Cdata['lightHour'];
$interest=$Cdata['interest'];
$waterkua=$Cdata['waterkua'];
$watertubewell=$Cdata['watertubewell'];
$waternhar=$Cdata['waternhar'];
$waterndi=$Cdata['waterndi'];
$watertalab=$Cdata['watertalab'];
$waterdrip=$Cdata['waterdrip'];
$wateranya=$Cdata['wateranya'];
$machine=$Cdata['machine'];
$pesticide=$Cdata['pesticide'];
$protected_Farming=$Cdata['protectedFarming'];
$storage=$Cdata['storage'];
$farm_House=$Cdata['farmHouse'];
$godown=$Cdata['godown'];
$labour_House=$Cdata['labourHouse'];
$path=$Cdata['path'];
$near_By_Market=$Cdata['nearByMarket'];
$transport=$Cdata['transport'];
$khasra=$Cdata['khasra'];
$halka=$Cdata['halka'];
$small_Farm=$Cdata['smallFarm'];
$medium_Farm=$Cdata['mediumFarm'];
$large_Farm=$Cdata['largeFarm'];
$irrigated_Land=$Cdata['irrigatedLand'];
$non_Irrigated_Land=$Cdata['nonIrrigatedLand'];
$selling_Center=$Cdata['sellingCenter'];
$cow=$Cdata['cow'];
$buffelo=$Cdata['buffelo'];
$goat=$Cdata['goat'];
$other=$Cdata['other'];
$cow_Breed=$Cdata['cowBreed'];
$buffelo_Breed=$Cdata['buffeloBreed'];
$dung_Land=$Cdata['dungLand'];
$dung_Land_Size=$Cdata['dungLandSize'];
$shed=$Cdata['shed'];
$shed_Type=$Cdata['shedType'];
$shed_Size=$Cdata['shedSize'];
$milk_Producer=$Cdata['milkProducer'];
$milk_Uses=$Cdata['milkUses'];
$near_By_Animal_Hospital=$Cdata['nearByAnimalHospital'];
$animal_Insurance=$Cdata['animalInsurance'];
$income_Source=$Cdata['incomeSource'];
$annual_Income=$Cdata['annualIncome'];
$bank_Name=$Cdata['bankName'];
$Adhar_No=$Cdata['AdharNo'];
$place=$Cdata['place'];
$date=$Cdata['date'];
$userImage=$Cdata['userImage'];
$signatureImage=$Cdata['signatureImage'];
$fingerprint=$Cdata['fingerprint'];


$data=$obj->insertData(
 $worker_id,
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
 $date,
 $userImage,
 $signatureImage,
 $fingerprint
);
 	echo $data;
?>