<?php 
extract($_POST);
if(isset($save)){
	if($e=="" || $p==""){
		$err="<font color='red'>fill all the fields first</font>";	
	}else{
		$pass=md5($p);	
		$sql=mysqli_query($conn,"select * from user_info where email='$e' and pass='$pass'");

		$r=mysqli_num_rows($sql);

		if($r==true){
			$_SESSION['user']=$e;
			header('location:user');
		}else{
			$err="<font color='red'>Invalid login details</font>";
		}
	}
} ?>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form method="post">
			<div class="row">
				<div class="col-sm-4"><h3 style="color:darkslategray">Login</h3></div>
			</div>
	
			<div class="row">
				<div class="col-sm-4"><?php echo @$err;?></div>
			</div>

			<div class="row" style="margin-top:10px">
				<div class="col-sm-4">Enter Your Email</div>
				<div class="col-sm-5">
					<input type="email" name="e" class="form-control"/></div>
			</div>
	
			<div class="row" style="margin-top:10px">
				<div class="col-sm-4">Enter Your Password</div>
				<div class="col-sm-5">
					<input type="password" name="p" class="form-control"/></div>
			</div>

			<div class="row" style="margin-top:10px">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<input type="submit" value="Login" name="save" style="background:darkslategray" class="btn btn-info"/></div>
			</div>
		</form>	
	</div>
</div>