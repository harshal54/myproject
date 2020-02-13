<?php
include '../db/dbconfig.php';
include '../db/dbOperation.php';
 $id=$_POST['id'];

 $obj= new Admin($db_con);
 $res=$obj->deletecustomer($id);

?>