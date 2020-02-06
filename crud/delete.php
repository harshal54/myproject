<?php
include 'connection.php';
$id=$_GET['id'];
$s="delete from user where id=$id";
$query=mysqli_query($con,$s);
if($query){
	echo '<script>alert("data deleted successfully")</script>';
	header('location:display.php');
	
}else{
		echo '<script>alert("data not deleted ")</script>';
		header('location:display.php');
}
?>