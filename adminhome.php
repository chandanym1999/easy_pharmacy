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
	<title>Home</title>
    <link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>


<body class="cushome" style="font-family: 'Yusei Magic', sans-serif;">
<style>
.cushome {
	background: url(images/bg.jpg) no-repeat center center fixed;
	background-size: cover;
}
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
.back {
	color:black;
	text-decoration:none;
}
.back:hover {
	color:black;
	text-decoration:none;
	font-weight:bolder;
}
.l {
	font-size:1.5em;
	padding-bottom:1em;
}
.ll {
	font-size:1.1em;
}
</style>
    <div class="header-area"> 
		<div class="header-top"> 
			<div class="container"> 
                <a href="#"><img src="img/admin.png" style="max-height: 5%;max-width: 5%;margin-left: 47%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 18%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="#" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Home</a></li>
						<li><a href="index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
		
		
		
		<div class="">
		<div class="cushome" > 
		<div class="chome"> 
			<div class="cus-top text-center"> 
				<div class="container"> 
					<h2 style="margin-left: 0%;font-size:3em">ADMIN PANEL</h2>
				</div>
			</div>
			<div class="cus-bottom" style="margin-top: 5%"> 
				<div class="portfolio"> 
			<div class="port-top text-center"> 
				
			</div>
			<div class="port-bottom"> 
				<div class="container" style="margin-left:22.5%;"> 
					<div class="img-row1" style="margin-bottom: 20px;">
					<div class="img col-md-4"><a href="adod.php"><img src="order.png" style="max-height: 100%;max-width: 100%;margin-bottom: 15px;" alt="" /></a><br><span>ORDER</span></div>
					<div class="img col-md-4"><a href="adsearchuser.php"><img src="user1.png" style="max-height: 100%;max-width: 100%;margin-bottom: 15px;" alt="" /></a><br><span >CUSTOMER</span></div>
					<div class="img col-md-4"><a href="addelidetails.php"><img src="lab1.png" style="max-height: 100%;max-width: 100%;margin-bottom: 15px;" alt="" /></a><br><span>LAB ORDER</span></div>
				
					</div>
					<div class="img-row2" style="margin-top: 20px;">
					<div class="img col-md-4"><a href="adphar.php"><img src="addlab.png" style="max-height: 100%;max-width: 100%;max-width: 100%;margin-bottom: 15px;margin-top:20%;" alt="" /></a><br><span>ADD LAB</span></div>
					<div class="img col-md-4"><a href="adminaddambulence.php"><img src="doctor.png" style="max-height: 100%;max-width: 100%;margin-bottom: 15px;margin-top:20%;" alt="" /></a><br><span>ADD DOCTOR</span></div>
					<div class="img col-md-4"><a href="adaddmed.php"><img src="tab.png" style="max-height: 100%;max-width: 100%;max-width: 100%;margin-bottom: 15px;margin-top:20%;"alt="" /></a><br><span>ADD MED</span></div>
					
					</div>
				</div>
			</div>
		</div>
			</div>
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
		
		
		
		
	</div>	
		
		
		
		
		
		
	
	
	
</body>
</html>