<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from products where pid='$info'");
	header('location:display_prod.php');
?>