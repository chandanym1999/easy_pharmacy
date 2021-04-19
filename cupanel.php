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
	<title>User Details</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
    <style type="text/css">
    html { 
  background: url(images/13.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
    </style>
</head>


<body style="font-family: 'Yusei Magic', sans-serif;">
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
	<div class="header-area" style="background: rgba(58, 186, 201, 0.66);"> 
		<div class="header-top"> 
			<div class="container"> 
                <a href="#"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 46%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="cushome.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Home</a></li>
						<li><a href="#" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Cart</a></li>
						<li><a href="index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;" class="nav-link">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
    <?php
                        $con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($con,'easy_pharmacy');

                        $result = mysqli_query($con,"SELECT * FROM customer where cuName='".$_SESSION["uname"]."';") or die("Failed to Login".mysql_error());

                        $row = mysqli_fetch_array($result);

                        $cuname=$row["cuName"];
                        $cumobile=$row["cuMobile"];
                        $cuadd=$row["cuAddress"];
                        $cuemail=$row["cuEmail"];
    ?>
	
	<div class="main-area"> 
		
		
		
		
		<div class="login"> 
			<form class="col-md-4 col-sm-offset-4 text-center">
            <h2>Patient's Panel - User Details</h2>
			<br>
			  <div class="form-group center">
                  <label class='l'>Username:</label>
                  
                  <?php echo "<label class='ll'>".$cuname."</label>";
                  ?>
                  <br>
                  <label class='l'>Mobile:</label>
                  
                  <?php echo "<label class='ll'>".$cumobile."</label>";
                  ?>
                  <br>
                  <label class='l'>Address:</label>
                  
                  <?php echo "<label class='ll'>".$cuadd."</label>";
                  ?>
                  <br>
                  <label class='l'>Email:</label>
				
                  <?php echo "<label class='ll'>".$cuemail."</label>";
                  ?>
                  <br>
			  </div>
                <br>
				   </form>
				<div style="top:55%;left:47%;position:absolute;">
				<form action="cupanelupdate.php">
                <button type="submit" class="btn btn-default" >Update Info</button></form>
				
				<form action="cupanelpassupdate.php">
				<br>
                <button type="submit" class="btn btn-default">Change Password</button></form>
				</div>
             
			  
			  <br>
			
			<br>
			
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