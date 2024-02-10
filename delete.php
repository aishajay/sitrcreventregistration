<?php
include('conn.php');

	$id=$_GET['id'];

	$querry="Delete from regnn where id='$id'";
	$result=mysqli_query($conn,$querry);

header("location: dispreg.php");
?>