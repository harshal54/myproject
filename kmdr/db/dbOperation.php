<?php

/*Login Operations Start Here*/
class Admin
{
    private $db;
 
    function __construct($db_con)
    {
      $this->db = $db_con;

    }

    public function adminLogin($username,$password)
    {
    	try
    	{
    		$stmt=$this->db->prepare("select * from login where username=:username and password=:password and role='admin'");
             $stmt->bindParam(":username",$username);
             $stmt->bindParam(":password",$password);
             return $stmt->execute()?$stmt->fetch(PDO::FETCH_ASSOC):null;   
    	}
    	catch(PDOException $err)
    	{
    		echo $err->getMessage();
    	}
    }


    public function costumerData()
    {
    	try
    	{
    		$stmt=$this->db->prepare("select * from mytable order by id desc");
             return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null;   
    	}
    	catch(PDOException $err)
    	{
    		echo $err->getMessage();
    	}
    }

       public function costumerDatabyworkerId($id)
    {
        
        try
        {
            $stmt=$this->db->prepare("select * from mytable where worker_id=$id");
            
             return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null;   
        }
        catch(PDOException $err)
        {
            echo $err->getMessage();
        }
    }

     public function costumerCheckedData($from_date,$to_date)
    {

        try
        {
            $query="select * from mytable";
            if(empty($from_date) && empty($to_date))
            {
                
            $stmt=$this->db->prepare($query);
            return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null;
            }
            elseif(empty($to_date))
            {
               
               $query .= " where date>='$from_date'" ;
             
                $stmt=$this->db->prepare($query);
               return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null;
            } 
             elseif(empty($from_date))
            {
               
               $query .= " where date<='$to_date' order by date DESC" ;
             
                $stmt=$this->db->prepare($query);
               return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null;
            }

            else
            {

               $query .= " where date between  '$from_date' and '$to_date' " ;
             
                $stmt=$this->db->prepare($query);
               return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null;

            }    
        }
        catch(PDOException $err)
        {
            echo $err->getMessage();
        }
    }

      public function ajaxcostumerData($name,$mobile,$adhar)
    {
    	
    	try
    	{   
    	   $query="select * from mytable  ";
    	
             if(empty($name) && empty($adhar))
             {
             
              $query .="where mobile LIKE '$mobile%'";
               $stmt=$this->db->prepare($query);
               return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null; 
             }
             elseif(empty($mobile) && empty($adhar))
             	 {
                $query .="where full_Name LIKE '$name%'";
                $stmt=$this->db->prepare($query);
                return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null; 
                }
                elseif(empty($mobile) && empty($name))
                 {
                $query .="where Adhar_No LIKE '$adhar%'";
                $stmt=$this->db->prepare($query);
                return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null; 
                }
              elseif(!empty($name) && !empty($mobile) && empty($adhar))
              {
                 $query .="where full_Name LIKE '$name%' and mobile LIKE '$mobile%'";
                $stmt=$this->db->prepare($query);
                return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null; 
              }  
               elseif(!empty($name) && !empty($adhar) && empty($mobile))
              {
                 $query .="where full_Name LIKE '$name%' and Adhar_No LIKE '$adhar%'";
                $stmt=$this->db->prepare($query);
                return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null; 
              } 
                 elseif(!empty($mobile) && !empty($adhar) && empty($name))
              {
                 $query .="where  mobile LIKE '$mobile%' and Adhar_No LIKE '$adhar%'";
                $stmt=$this->db->prepare($query);
                return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null; 
              } 
              elseif(!empty($name) && !empty($adhar) && !empty($mobile)) 
              {
                 $query .="where  mobile LIKE '$mobile%' and full_Name LIKE '$name%' and Adhar_No LIKE '$adhar%'";
                $stmt=$this->db->prepare($query);
                return $stmt->execute()?$stmt->fetchALL(PDO::FETCH_ASSOC):null; 
              } 
            
           
    	}
    	catch(PDOException $err)
    	{
    		echo $err->getMessage();
    	}
    }
  


    public function costumerProfile($id)
    {
        try
        {
            $stmt=$this->db->prepare("select * from mytable where id=:id");
             $stmt->bindParam(":id",$id);
             return $stmt->execute()?$stmt->fetch(PDO::FETCH_ASSOC):null;   
        }
        catch(PDOException $err)
        {
            echo $err->getMessage();
        }
    }
   


public function deletecustomer($id){
        try{  
          $stmt=$this->db->prepare("delete from mytable where id=:id");
          $stmt->bindParam(":id",$id);
          if($stmt->execute())  
          {
            return true;
          }
          else
          {
            return false;
          }
        }catch(PDOException $err)
        {
            echo $err->getMessage();
        }
      }

 }

class WorkerData
{
  private $db;
  public function __construct($db_con)
        {
            $this->db=$db_con;
        }
         public function deleteworker($id){
          
         $stmt=$this->db->prepare("delete from worker where id=:id");
          $stmt->bindParam(":id",$id);
          if($stmt->execute())  
          {
            return true;
          }
          else
          {
            return false;
          }
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
                    
                 echo "<script>alert('Profile Added successfully');window.location='workertable.php';</script>";
              
                }
                else 
                {
                    
                    echo "<script>alert('data not saved try again');</script>";
                    
                }
              
               

           }

        public function workertable()
            {
                 try
                 {
                 $stmt=$this->db->prepare("select a.*,(SELECT count(worker_id) from mytable where worker_id=a.id) as total_worker from worker a order by a.id desc");
                     
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


   public function updateWorker($full_name,$user_name,$mobile_no,$password,$date_time,$id)
           {

               $stmt=$this->db->prepare("update  worker set full_name=:full_name,user_name=:user_name,mobile_no=:mobile_no,password=:password,date_time=:date_time where id=:id");
                $stmt->bindParam(":full_name",$full_name);
                $stmt->bindParam(":user_name",$user_name);
                $stmt->bindParam(":mobile_no",$mobile_no);
                $stmt->bindParam(":password",$password);
                $stmt->bindParam(":date_time",$date_time);
                $stmt->bindParam(":id",$id); 
               
              
              

                if($stmt->execute())
                {
                  echo "<script>alert('Profile updated successfully');window.location='workertable.php';</script>";
              
                }
                else 
                {
                  echo "<script>alert('Profile update failed');</script>";
                }
               
           }



    public function workerProfile($id)
           {
                
                $stmt=$this->db->prepare("select * from worker where id=:id");
                $stmt->bindParam(":id",$id); 
               
              
              

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


