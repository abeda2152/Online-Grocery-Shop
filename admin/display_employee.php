	

<div class="container">
	<div class="row">
        <div class="col-lg-12" style="margin-top:60px;margin-bottom:20px">
				<h2 style="color:darkslategray">Employee List</h2>
		</div>
	</div>
</div>

<div class="container">
<?php
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>ID</th>";
	echo "<th>First name</th>";
	echo "<th>Last name</th>";
	echo "<th>Email</th>";
	echo "<th>Mobile No.</th>";
	echo "<th>Address</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from user_info");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['user_id']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['address']."</td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[user_id])'><span style=color:red;>delete</span></a></td>";
		
		echo "</tr>";
		#$i++;
	}
?>
</div>