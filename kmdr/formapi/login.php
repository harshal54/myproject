<?php
include_once 'database/connectionlogin.php';
include_once 'database/classeslogin.php';

 $obj=new WorkerData($db_con);
 $data=$obj->loginWorker($_REQUEST['user_name'],$_REQUEST['password']);
 if($data)
 {
 	echo json_encode(array("message"=>"succes","data"=>$data));
}
else 
  echo json_encode(array("message"=>"not exist"));

?>