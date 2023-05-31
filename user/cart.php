<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_cart.php?id='+id;
     }
}
</script>	

<div class="container">
	<div class="row">
        <div class="col-lg-12" style="margin-top:60px;margin-bottom:20px">
				<h2 style="color:darkslategray">Customer List</h2>
		</div>
	</div>
</div>

<div class="container">
<?php
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Price</th>";
	echo "</tr>";
	
	$que=mysqli_query($conn,"select * from cart");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['cid']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['price']."</td>";
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[cid])'><span style=color:red;>delete</span></a></td>";
		
		echo "</tr>";
		#$i++;
	}
?>
</div>