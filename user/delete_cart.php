<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from cart where cid='$info'");
	header('location:index.php?info=cart');
?>