<?php
class InsertApi
{
  private $db;
  public function __construct($db_con)
        {
        	$this->db=$db_con;
        }

 public function insertData($worker_id,$full_Name,$father_Name,$mother_Name,$dob,
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
 $fingerprint)
           {
              try
              {
                
      $stmt=$this->db->prepare("insert into mytable (
worker_id,
full_Name,
father_Name,
mother_Name,
dob,
qualification,
spouse_Name ,
spouse_Dob ,
category ,
permanent_Address ,
village ,
telsil ,
post ,
dist ,
state, 
mobile ,
phone ,
email, 
boys ,
girls ,
child_Edu1 ,
child_Edu2, 
child_Edu3, 
crop_Type ,
soil_Test ,
soil_Type, 
soil_Depth, 
water_Level, 
tree_On_Med ,
tree_In_Farm ,
 light_Type ,
 light_Hour, 
 interest, 
 waterkua ,
 watertubewell, 
 waternhar, 
 waterndi ,
 watertalab ,
 waterdrip ,
 wateranya ,
 machine ,
 pesticide ,
 protected_Farming,
 storage,
 farm_House,
 godown,
 labour_House,
 path,
 near_By_Market,
transport,
 khasra,
 halka,
 small_Farm,
 medium_Farm,
 large_Farm,
 irrigated_Land,
 non_Irrigated_Land,
 selling_Center,
 cow,
 buffelo,
 goat,
 other,
 cow_Breed,
 buffelo_Breed,
 dung_Land,
 dung_Land_Size,
 shed,
 shed_Type,
 shed_Size,
 milk_Producer,
 milk_Uses,
 near_By_Animal_Hospital,
 animal_Insurance,
 income_Source,
 annual_Income,
 bank_Name,
 Adhar_No,
 place,
 date,
  user_image,
 siganture_image,
 fingerprint)
           VALUES (
:worker_id,
:full_Name,
:father_Name,
:mother_Name,
:dob,
:qualification,
:spouse_Name ,
:spouse_Dob ,
:category ,
:permanent_Address ,
:village ,
:telsil ,
:post ,
:dist ,
:state, 
:mobile ,
:phone ,
:email, 
:boys ,
:girls ,
:child_Edu1 ,
:child_Edu2, 
:child_Edu3, 
:crop_Type ,
:soil_Test ,
:soil_Type, 
:soil_Depth, 
:water_Level, 
:tree_On_Med ,
:tree_In_Farm ,
 :light_Type ,
 :light_Hour, 
 :interest, 
 :waterkua ,
 :watertubewell, 
 :waternhar, 
 :waterndi ,
 :watertalab ,
 :waterdrip ,
 :wateranya ,
 :machine ,
 :pesticide ,
 :protected_Farming,
 :storage,
 :farm_House,
 :godown,
 :labour_House,
 :path,
 :near_By_Market,
 :transport,
 :khasra,
 :halka,
 :small_Farm,
 :medium_Farm,
 :large_Farm,
 :irrigated_Land,
 :non_Irrigated_Land,
 :selling_Center,
 :cow,
 :buffelo,
 :goat,
 :other,
 :cow_Breed,
 :buffelo_Breed,
 :dung_Land,
 :dung_Land_Size,
 :shed,
 :shed_Type,
 :shed_Size,
 :milk_Producer,
 :milk_Uses,
 :near_By_Animal_Hospital,
 :animal_Insurance,
 :income_Source,
 :annual_Income,
 :bank_Name,
 :Adhar_No,
 :place,
 :date,
 :user_image,
 :siganture_image,
 :fingerprint)");
 
                $stmt->bindParam(":worker_id",$worker_id);
                $stmt->bindParam(":user_image",$user_image);
                $stmt->bindParam(":siganture_image",$siganture_image);
                $stmt->bindParam(":fingerprint",$fingerprint);
                $stmt->bindParam(":full_Name",$full_Name);
                $stmt->bindParam(":father_Name",$father_Name);
                $stmt->bindParam(":mother_Name",$mother_Name);
                $stmt->bindParam(":dob",$dob);
                $stmt->bindParam(":qualification",$qualification);
                $stmt->bindParam(":spouse_Name",$spouse_Name);
                 $stmt->bindParam(":spouse_Dob",$spouse_Dob);
                $stmt->bindParam(":category",$category);
                $stmt->bindParam(":permanent_Address",$permanent_Address);
                $stmt->bindParam(":village",$village);
                $stmt->bindParam(":telsil",$telsil);
                $stmt->bindParam(":post",$post);
                 $stmt->bindParam(":dist",$dist);
                $stmt->bindParam(":state",$state);
                $stmt->bindParam(":mobile",$mobile);
                $stmt->bindParam(":phone",$phone);
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":boys",$boys);
                 $stmt->bindParam(":girls",$girls);
                $stmt->bindParam(":child_Edu1",$child_Edu1);
                $stmt->bindParam(":child_Edu2",$child_Edu2);
                $stmt->bindParam(":child_Edu3",$child_Edu3);
                $stmt->bindParam(":crop_Type",$crop_Type);
                $stmt->bindParam(":soil_Test",$soil_Test);
                 $stmt->bindParam(":soil_Type",$soil_Type);
                $stmt->bindParam(":soil_Depth",$soil_Depth);
                $stmt->bindParam(":water_Level",$water_Level);
                $stmt->bindParam(":tree_On_Med",$tree_On_Med);
                $stmt->bindParam(":tree_In_Farm",$tree_In_Farm);
                $stmt->bindParam(":light_Type",$light_Type);
                 $stmt->bindParam(":light_Hour",$light_Hour);
                $stmt->bindParam(":interest",$interest);
                $stmt->bindParam(":waterkua",$waterkua);
                $stmt->bindParam(":watertubewell",$watertubewell);
                $stmt->bindParam(":waternhar",$waternhar);
                $stmt->bindParam(":waterndi",$waterndi);
                 $stmt->bindParam(":watertalab",$watertalab);
                $stmt->bindParam(":waterdrip",$waterdrip);
                 $stmt->bindParam(":wateranya",$wateranya);
                $stmt->bindParam(":machine",$machine);
                $stmt->bindParam(":pesticide",$pesticide);
                $stmt->bindParam(":protected_Farming",$protected_Farming);
                $stmt->bindParam(":storage",$storage);
                $stmt->bindParam(":farm_House",$farm_House);
                 $stmt->bindParam(":godown",$godown);
                $stmt->bindParam(":labour_House",$labour_House);
                 $stmt->bindParam(":path",$path);
                $stmt->bindParam(":near_By_Market",$near_By_Market);
                $stmt->bindParam(":transport",$transport);
                $stmt->bindParam(":khasra",$khasra);
                $stmt->bindParam(":halka",$halka);
                $stmt->bindParam(":small_Farm",$small_Farm);
                 $stmt->bindParam(":medium_Farm",$medium_Farm);
                $stmt->bindParam(":large_Farm",$large_Farm);
                 $stmt->bindParam(":irrigated_Land",$irrigated_Land);
                $stmt->bindParam(":non_Irrigated_Land",$non_Irrigated_Land);
                $stmt->bindParam(":selling_Center",$selling_Center);
                $stmt->bindParam(":cow",$cow);
                $stmt->bindParam(":buffelo",$buffelo);
                $stmt->bindParam(":goat",$goat);
                $stmt->bindParam(":other",$other);
                $stmt->bindParam(":cow_Breed",$cow_Breed);
                $stmt->bindParam(":buffelo_Breed",$buffelo_Breed);
                $stmt->bindParam(":dung_Land",$dung_Land);
                $stmt->bindParam(":dung_Land_Size",$dung_Land_Size);
                $stmt->bindParam(":shed",$shed);
                 $stmt->bindParam(":shed_Type",$shed_Type);
                $stmt->bindParam(":shed_Size",$shed_Size);
                $stmt->bindParam(":milk_Producer",$milk_Producer);
                $stmt->bindParam(":milk_Uses",$milk_Uses);
                $stmt->bindParam(":near_By_Animal_Hospital",$near_By_Animal_Hospital);
                $stmt->bindParam(":animal_Insurance",$animal_Insurance);
               $stmt->bindParam(":income_Source",$income_Source);
                $stmt->bindParam(":annual_Income",$annual_Income);
                $stmt->bindParam(":bank_Name",$bank_Name);
                $stmt->bindParam(":Adhar_No",$Adhar_No);
                $stmt->bindParam(":place",$place);
                $stmt->bindParam(":date",$date);


              	if($stmt->execute())
              	{
              
              		return "true";
              	}
              	else 
              	{
              		return "false";
              	}
              } 
              catch(PDOException $err)
              {
              	echo $err->getMessage();
              }  

           }



   public function showData($id_s)
   {
       try 
       {
        
        $stmt=$this->db->prepare("select * from mytable   LIMIT $id_s,3 ");
        if($stmt->execute())
        {
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else 
        {
          return false;
        }

      }
        catch(PDOException $err)
              {
                echo $err->getMessage();
              }  
   }        
     
}
 ?>