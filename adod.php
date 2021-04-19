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
	<title>Order Details</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

    <style type="text/css">
    html { 
  background: url(images/14.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
    </style>
</head>


<body class="login" style="font-family: 'Yusei Magic', sans-serif;">
    <style>
.login {
	background: url(images/14.jpg) no-repeat center center fixed;
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
                <a href="#"><img src="img/admin.png" style="max-height: 5%;max-width: 5%;margin-left: 49%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="adminhome.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Home</a></li>
						<li><a href="index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
	<div class="main-area"> 
		
		
		
		
		<div class="login"> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.8;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
            <h2>Admin Panel - Order Details</h2>
			<br>
			<br>
			  <table style="background:white;border:1px solid black;" class="text-center">
                <thead>
                    <tr style="padding-left: 10px;">
                        <th style="border:1px solid black">Order ID</th>
                        <th style="border:1px solid black">Medicine Name</th>
                        <th style="border:1px solid black">Medicine Quantity</th>
                        <th style="border:1px solid black">Medicine Price</th>
                        <th style="border:1px solid black">Total Price</th>
                        <th style="border:1px solid black">Customer Name</th>
                        <th style="border:1px solid black">Customer Mobile</th>
                        <th style="border:1px solid black">Customer Address</th>
						<th style="border:1px solid black">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }
                    mysqli_select_db($con,'easy_pharmacy');

                        $resul = mysqli_query($con,"SELECT distinct ordercusname FROM medicineorder;") or die("Failed to fetch".mysql_error());
                    while($row1= mysqli_fetch_assoc( $resul)){
						$x=$row1['ordercusname'];
						$result = mysqli_query($con,"SELECT * FROM medicineorder where ordercusname='$x';") or die("Failed to fetch".mysql_error());
							while( $row = mysqli_fetch_assoc( $result) ){
				
                                    echo "<tr><td>{$row['orderId']}</td><td>{$row['medicinename']}</td><td>{$row['medquantity']}</td><td>{$row['medprice']}</td><td>{$row['totalprice']}</td><td>{$row['ordercusname']}</td><td>{$row['orderphone']}</td><td>{$row['orderaddress']}</td><td><a href=\"delete4.php?id=".$row['orderId']."\">Delete</a></td></tr>\n";
                                        }
					echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
					echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";}
                    ?>
                  </tbody>
                </table>
			</form> 
			<br>
			
		
		<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
		-->
		
        </div>
		
    </div>	
		
		
		
		
		
		
	
	
	
</body>
</html>