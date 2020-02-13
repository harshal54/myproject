<?php
include '../db/dbconfig.php';
include '../db/dbOperation.php';
$id=$_POST['id'];
 $obj= new WorkerData($db_con);
 $res=$obj->deleteworker($id);
?>