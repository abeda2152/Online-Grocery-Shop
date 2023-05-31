<?php 
extract($_POST);
if(isset($save)){
	//check user alereay exists or not
	$sql=mysqli_query($conn,"select * from user_info where email='$e'");

	$r=mysqli_num_rows($sql);

	if($r==true){
		$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
	}else{
		$pass=md5($p); //encrypt password

		$query="insert into user_info values('','$fn','$ln','$e','$pass','$m','$ad')";
		$q = mysqli_query($conn,$query);

		$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

		if($q==true){
			$_SESSION['user']=$e;
			header('location:user');
		}else{
			
		}

	}
} ?>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered" style="margin-bottom:50px">
				<caption><h2 align="center">Registration Form</h2></caption>

				<tr><td colspan="2"><?php echo @$err;?></td></tr>
				
				<tr>
					<td>First name</td>
					<Td><input  type="text" name="fn" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Last name</td>
					<Td><input  type="text" name="ln" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Email</td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Password</td>
					<Td><input type="password" name="p" class="form-control" required/></td>
				</tr>

				<tr>
					<td>Mobile</td>
					<Td><input type="text" name="m" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Address</td>
					<Td><input type="text" name="ad" class="form-control" required/></td>
				</tr>

				<tr>		
					<td colspan="2" align="center">
						<input type="submit" value="Save" class="btn btn-info" name="save" style="background:darkslategray"/>
						<input type="reset" value="Reset" class="btn btn-info" style="background:darkslategray"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="col-sm-2"></div>
</div>
