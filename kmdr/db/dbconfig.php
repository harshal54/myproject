<?php

$_host="localhost";
$_user="admin";
$_password="123456789";
$my_db="omcropsc_kocm_db";

try
{
	$db_con= new PDO("mysql:host={$_host};dbname={$my_db};charset=utf8",$_user,$_password);
	$db_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
}

catch(PDOException $err)
{
	echo $err->getMessage();
}
?>
