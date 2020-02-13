<?php

$_host="localhost";
$_user="omcropsc_kom_19";
$_password="KkOoCc123456";
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