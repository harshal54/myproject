<?php
session_start();
$con=mysqli_connect('localhost','admin','123456789','student');
if(!$con){
	echo "connection_failed";
}
?>