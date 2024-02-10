<?php 

	$conn=new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		
		die('Connection Failed:'.$conn->connect_error);
	}
?>