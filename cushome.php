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
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
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
                <a href="cupanel.php"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 46%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="#" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Home</a></li>
						<li><a href="cart/index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Cart</a></li>
						<li><a href="index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
		
		
		
		<div class="login">
		<div class="cushome" > 
		<div class="chome"> 
			<div class="cus-top text-center"> 
				<div class="container"> 
					<h2 style="margin-left: 0%">Patient's Panel</h2>
				</div>
			</div>
			<div class="cus-bottom" style="margin-top: 5%"> 
				<div class="container" style="padding-bottom:150px;"> 
					<div class="img-row1">
					<div class="img col-md-3" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 5%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%">
					<a href="cart/index.php"><img src="img/Creative-Tail-medicine.svg.png" alt="" style="max-height: 35%;max-width: 35%"></a> 
					<br>
					<br>
                    <label style="margin-left: 2%;">Browse Medicine</label>
					</div>
					<div class="img col-md-3" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 5%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%"><a href="cart/cusfindphar.php"><img src="img/aesulapian-staff-308760_640.png" alt="" style="max-height: 29%;max-width: 29%;margin-left: 12%"></a>
					<br>
					<label style="margin-left: 14%;">Labs</label>
					</div>
					<div class="img col-md-3" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 5%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%"><a href="cusfindambulence.php"><img src="images/stet.png" alt=""  style="max-height: 70%;max-width: 30%"></a>
					<br>
                    <br>
                        <label style="margin-left: 15%;margin-top: 2%;">Doctor Consult</label>
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
    <?php
    // Connect to the database
                        $con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($con,'easy_pharmacy');

                        $result = mysqli_query($con,"SELECT cuId FROM customerlogin where cuUserName='".$_SESSION["uname"]."' and cuPassword='".$_SESSION["upass"]."';") or die("Failed to Login".mysql_error());

                        $row = mysqli_fetch_array($result);

                        $_SESSION["uId"]=$row["cuId"];
                        
    ?>
		
		
		
		
		
		
	
	
	
</body>
</html>