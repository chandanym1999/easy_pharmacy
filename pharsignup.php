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
	<title>Pharmacy Signup</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>


<body class="brwsmdcn" style="font-family: 'Yusei Magic', sans-serif;">
<div class="header-area" style="background: rgba(58, 186, 201, 0.66);"> 
		<div class="header-top"> 
<!--            <img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 48%;opacity:1.0;"> <h1 style="text-align: center;color: black">Medicine Guide</h1>-->
			<div class="container"> 
				<div class="logo col-md-3"> 
					<h1 "class='logo_name' style="color: black;", sans-serif;">EASY PHARMACY</h1>
				</div>
				<div class="menu col-md-7"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="cussignup.php" style="color:black;font-size:18px;">Customer SignUp</a></li>
<!--						<li><a href="pharsignup.php" style="color:white;">Pharmacy SignUp</a></li>-->
						<li><a href="login.php" style="color:black;font-size:18px;">Login</a></li>
						
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
  height:40px;
  width:90px;
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
.form-control {
	border-radius:2em;
}
.login1 {
	text-decoration: none;
}
.login1:hover {
	text-decoration: none;
	font-weight:bolder;
}
	</style>
	<div class="main-area"> 
		
		
		
		
		<div class=""> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.9;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Pharmacy Name:</label>
				<input type="text" class="form-control" id="user" name="phuname" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Email:</label>
				<input type="email" class="form-control" id="email" name="phemail" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Password:</label>
				<input type="password" class="form-control" id="pwd" name="phpass" style="width:50%;margin-left: 24%" required>
                </div>
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Mobile:</label>
				<input type="text" class="form-control" id="mbl" pattern="[0-1]{2}[0-9]{9}" name="phmobile" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">Address:</label>
				<input type="text" class="form-control" id="adrs" name="phaddress" style="width:50%;margin-left: 24%" required>
			  </div>
                <div class="form-group">
				<label for="region" style="font-weight: bold;color: #000000;">Region:</label>
				    <select name="region">
                        <option value="Mirpur">Mirpur</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Dhanmondi">Dhanmondi</option>
                        <option value="Bashundhara">Bashundhara</option>
                    </select>
			  </div>
                
			  
			  <button type="submit" class="btn btn-default">Sign Up!</button>
                <br>
                <br>
                <a href="index.php" class='login1'>Go back to Login!</a>
			</form> 
			<?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $phName=$_POST["phuname"];
	            $phPassword=$_POST["phpass"];
	            $phEmail=$_POST["phemail"];
	            $phMobile=$_POST["phmobile"];
	            $phAddress=$_POST["phaddress"];
                $selected_val = $_POST['region'];  // Storing Selected Value In Variable
                
	            $conn=mysqli_connect("localhost","root","","easy_pharmacy");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
	
	           $sql="insert into pharmacylogin(phUserName,phPassword) values('".$phName."', '".$phPassword."')";
               $sql1="insert into pharmacy(pRegion,phMobile,phAddress,pName,pId) values('".$selected_val."', '".$phMobile."','".$phAddress."', '".$phName."', LAST_INSERT_ID())";
	           $result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	                   if($result && $result1){
		                  //header("Location:index.php");
                           $message = "Successfully registered!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Registration Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
            }
            ?>
			
		</div>
		
		<div class="signup col-sm-offset-8 col-md-8"> 
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
	</div>
	
	
</body>
</html>