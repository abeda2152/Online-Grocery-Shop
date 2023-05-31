<?php
session_start();
require('dbconfig.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scle=1">
	<title>Online Grocery Shop</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:darkslategray">
        <div class="container">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online Grocery Shop</a>
            </div>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="color:#FFFFFF" href="index.php?info=registration">Sign Up</a></li>
											
                    <li class="dropdown">
                        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Panel
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color: #FFFFFF">
                            <li><a href="index.php?info=admin">Admin</a></li>
                            <li><a href="index.php?info=employee">Employee</a></li>
                        </ul>
                    </li>

                    <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php 
	@$info=$_GET['info'];
	if($info!=""){
		if($info=="about"){
			include('about.php');
		} 
		else if($info=="login"){
			include('login.php');
		}
		else if($info=="registration"){
			include('registration.php');
		}
        else if($info=="admin"){
            include('admin/login.php');
        }
        else if($info=="employee"){
            include('employee/login.php');
        }
	}
	else
		{ ?>

            <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

            <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill" style="background-image:url('images/img1.jpg');"></div>
                        <div class="carousel-caption">
                            <h4>Fresh Food & Quality Products At Affordable Prices</h4>
                        </div>
                    </div>
           
                    <div class="item">
                        <div class="fill" style="background-image:url('images/img2.jpg');"></div>
                        <div class="carousel-caption">
                            <h4>Fast Home Delivery</h4>
                        </div>
                    </div>
                </div>
			
            <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                </a>
             </header>		
	
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-sm-10" style="margin-top:60px;margin-bottom:80px">
				        <h2>Welcome to the Online Grocery Shop</h2>
	
			         </div>
<?php } ?>
                </div>
            
            </div>
	
	       <div class="navbar-fixed-bottom nav navbar-inverse text-right" style="padding:2px;height:20px; background:darkslategray">
		      <span style="color:#FFFFFF">CSE411 project</span>
              <a href="index.php?info=about">About</a>
	       </div>


    <script src="css/jquery.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 6500
        })
    </script>
</body>
</html>
