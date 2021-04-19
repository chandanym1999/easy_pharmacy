<?php
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
	<link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
	<title>Easy Pharmacy</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
    
</head>


<body class="" style="font-family: 'Yusei Magic', sans-serif;background: #EAEAEAE6;">
		
		<div class="header-area" style="background: rgba(58, 186, 201, 0.66);"> 
		<div class="header-top"> 
<!--            <img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 48%;opacity:1.0;"> <h1 style="text-align: center;color: black">EASY PHARMACY</h1>-->
			<div class="container"> 
				<div class="logo col-md-4"> 
					<h1 "class='logo_name' style="color: black;", sans-serif;">EASY PHARMACY</h1>
				</div>
				<div class="menu col-md-6" style="margin-left: 120px;padding-top: 25px;"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="cussignup.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Customer SignUp</a></li>
						<li><a href="adminlogin.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Admin Login</a></li>
						<li><a href="login.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Customer Login</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
		
    <style> 
	.nav-link {
  color: black;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 0.1em; 
  display: inline-block;
  padding: 12px 2px;
  position: relative;
  padding-right:5px;
}
.nav-link:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: rgb(8, 2, 2);
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
.nav-link:hover:after { 
  width: 100%; 
  left: 0; 
}
.menu a {
	margin-left: 0px;
}
button{
  background:#1AAB8A;
  color:#fff;
  border:none;
  position:relative;
  height:60px;
  font-size:1.6em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  text-decoration: none;
}
button:hover{
  background:#fff;
  color:#1AAB8A;
}
button:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
button:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
button:hover:before,button:hover:after{
  width:100%;
  transition:800ms ease all;
}
.btn_cust {
	color:black;
	text-decoration: none;
}
.btn_cust:hover {
	color:black;
	text-decoration: none;
}

	</style>
    
    <div class="slider" style="width:70%;left:15%;position:relative">
<!--  <h2></h2>  -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" ></li>
      <li data-target="#myCarousel" data-slide-to="2" ></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/doc.jpg" alt="Los Angeles" style="width:100%;height:60vh;">
          <div class="carousel-caption">
          <h3 style="color:#312B35">Doctor's Guide</h3>
          <p style="color: #312B35;">For your health care!!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/med.jpg" alt="Chicago" style="width:100%;height:60vh;">
          <div class="carousel-caption">
          <h3>Browse Medicine</h3>
          <p>Find Your Medicine and Get Home Delivery !!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/lab.jpg" alt="New york" style="width:100%;height:60vh;">
          <div class="carousel-caption">
          <h3 style="color:black;">Lab Tests</h3>
          <p style="color:black;">Book your lab tests online!!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    
    
    
    
<div class="parts container row" style="margin-top:30px;padding-bottom:30px; background:#EAEAEAE6;width: 101%;"> 
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;"> 
					<img src="images/31.png" alt="" />
                    <h3>Same Day Delivery</h3>
                    <p>We deliver your medicine on the same day you order. Customer satisfaction is our main goal!</p>
				</div>
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;"> 
					<img src="images/32.png" alt="" />
                    <h3>Best Doctors</h3>
                    <p>Get your prescription from the best doctors around you along with our best suggestion!</p>
				</div>
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;">  
					<img src="images/33.png" alt="" />
                    <h3>Quality Medicine</h3>
                    <p>We deliver the best medicines for the customers for better results to both customers and ourselves.</p>
				</div>
				
				
			</div>
    
    
    
    <div class="parts container row" style="padding-bottom:30px; background:#F2F2F2;width: 101%;"> 
       
        <br>
		<br>
		<br>
                <div class="row">
				<div class="col-md-6 text-center" style="margin-top:130px;padding-bottom:30px;"> 
					
                    <h3>Extra Fast Delivery</h3>
                    <p style="font-size: 18px;">We deliver your medicine as soon as soon possible. We know people don't place order for medicine for fantacy. We believe, just a tiny bit of dely of the delivery can cost someones' life. So, our goal is to deliver the medicine to the doorstep as soon as possible to ensure better customer satisfaction.</p>
				</div>
                <div class="col-md-6 text-center" style="padding-bottom:30px;"> 
					<img src="images/18.jpg" alt="" />
                    
				</div>
                    
                <div class="col-md-6 text-center" style="margin-top:60px;padding-bottom:30px;"> 
					<img src="images/15a.jpg" alt="" />
                    
				</div>
				<div class="col-md-6 text-center" style="margin-top:130px;padding-bottom:30px;"> 
					
                    <h3>Quality Medicine</h3>
                    <p style="font-size: 18px;">Medicine is a deligate object. If not taken proper care, the quality of the medicine might jeopardize. We carefully maintain the products as instructed by the medicine company. We DO NOT KEEP expired medicine.</p>
				</div>
        
        </div>
        
        
        <div class="container row sgn" style="margin-top:30px;padding-bottom:30px; width: 103%;background:#7DD2DB;"> 
				<div class="col-md-12 text-center" style="margin-top:60px;padding-bottom:30px;background:#7DD2DB;"> 
					
                    <h3>Sign Up today</h3> <br>
                    <button><a href="cussignup.php" class='btn_cust' >As Customer</a></button>

                    <br>
                    <br>
                    <p style="font-weight: bold; font-size: 15px;">Sign Up to get access all the medicine and order !!</p>
				</div>
				
				
				
			</div>
        
        
        
        
        
        </div>
      
    <div class="container row" style="width: 103%; background: #1a1a1ae6; margin-top: -30px;"> 
				<div class="col-md-12 text-center" style="margin-top:30px;padding-bottom:20px;"> 
				
                    
                    <p style="font-weight: bold; font-size: 15px;color: white;">Designed by chandan and bopanna</p>
				</div>
				
				
				
			</div>
				
				
				

    
    
    
    
    
    
    
    
	
		
		
		
		
    
        
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
		
<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
-->
		
		
		
		
		
		
		
		
		
		
		
	
	
	
</body>
</html>