<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	$r =mysqli_query($conn,"select pid, name, price from products where pid = '$info'");

while($row=mysqli_fetch_array($r))
	{
		$query="insert into cart values('','1','$row['pid']','$row['name']','$row['price']')";
		mysqli_query($conn,$query);
	}

	header('location:product.php');
?>