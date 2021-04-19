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
	<title>List of Medicines</title>
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


<body class="brwsmdcn" style="font-family: 'Yusei Magic', sans-serif;">
    <style>
.brwsmdcn {
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
                
                <a href="#"><img src="img/admin.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a> <br>
                <label class="text-center" style="margin-left:51%;"><?php echo $_SESSION["uname"];?></label> 
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="adminhome.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Home</a></li>
						<li><a href="index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
		
		
		
		
		<div class="" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.8;filter: alpha(opacity=60);text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
		<div class="br"> 
			<div class="br-top text-center"> 
				<div class="container" > 
					<h2>Admin's Panel - Browse Medicine</h2>
				</div>
			</div>
            
			
                </div>
                
            
            
            <br>
 

            <?php
            
                        
    ?>
    
		
		<div class="result_table" style="margin-left: 2%;text-align: center;">
            <br>
            <br>
            
            
            
           
            
            
            
            
            
            
            <br>
            <br>
            <table style="background:white;border:1px solid black;" class="text-center">
                <thead>
                    <tr style="padding-left: 10px;">
                        <th style="border:1px solid black">Name</th>
                        <th style="border:1px solid black">Scientefic Name</th>
                        <th style="border:1px solid black">Disease Category</th>
                        <th style="border:1px solid black">Price</th>
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

                        $resul = mysqli_query($con,"SELECT * FROM medicine;") or die("Failed to fetch".mysql_error());
                    
                    while( $row = mysqli_fetch_assoc( $resul) ){
                                    echo "<tr><td>{$row['medName']}</td><td>{$row['scienteficName']}</td><td>{$row['diseaseCategory']}</td><td>{$row['price']}</td><td><a href=\"delete2.php?id=".$row['medId']."\">Delete</a></td></tr>\n";
                                        }
            
                        
                           
                        
                        
                ?>
                
                </tbody>
            </table>
		
		<br>
		
<!--		<button type="submit" class="btn btn-success">Checkout</button>-->
		
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