<?php

class WorkerData
{
  private $db;
  public function __construct($db_con)
        {
        	$this->db=$db_con;
        }

    public function insertWorkerData($full_name,$user_name,$mobile_no,$password,$date_time)
           {
                
              	$stmt=$this->db->prepare("insert into  worker (full_name,user_name,mobile_no,password,date_time) values (:full_name,:user_name,:mobile_no,:password,:date_time)");
              	$stmt->bindParam(":full_name",$full_name);
                  $stmt->bindParam(":user_name",$user_name);
              	$stmt->bindParam(":mobile_no",$mobile_no);
              	$stmt->bindParam(":password",$password);
              	$stmt->bindParam(":date_time",$date_time);
              

              	if($stmt->execute())
              	{
              		echo "<script>alert('data saved succesfully');</script>";
              
              	}
              	else 
              	{
              		echo "<script>alert('data not saved try again');</script>";
              		
              	}
              
               

           }

           public function checkUser()
            {
                 try
                 {
                 $stmt=$this->db->prepare("select * from worker");
                     
                     if($stmt->execute())
                     { return $stmt->fetchALL(PDO::FETCH_ASSOC);}
                    else 
                     { return false;}

                 }
                  catch(PDOException $err)
              {
                echo $err->getMessage();
              }  

            }


    public function loginWorker($user_name,$password)
           {
                
                $stmt=$this->db->prepare("select * from worker where user_name=:user_name and password=:password");
                $stmt->bindParam(":user_name",$user_name); 
                $stmt->bindParam(":password",$password);
              
              

                if($stmt->execute())
                {
                  return $stmt->fetch(PDO::FETCH_ASSOC);
              
                }
                else 
                {
                  echo "email is valid";
                }
               
           }

  
}




 ?>