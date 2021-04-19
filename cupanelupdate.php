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
						$cusid=$row["cuId"];
    ?>
	
	<div class="main-area"> 
		
		
		
		
		<div class="login"> 
			<form class="col-md-4 col-sm-offset-4 text-center" method="post">
            <h2>Patient's Panel - User Details</h2>
			  <div class="form-group center">
                <div class=""> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.9;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
              <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Customer ID:</label>
				<input type="text" class="form-control" id="user" name="cusid" value="<?php echo"$cusid" ?>" style="width:50%;margin-left: 24%" placeholder="<?php echo"$cusid" ?>" required>
			  </div>
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Customer Name:</label>
				<input type="text" class="form-control" id="user" name="cusname" style="width:50%;margin-left: 24%" placeholder="<?php echo"$cuname" ?>" required>
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Customer Mobile:</label>
				<input type="text" class="form-control" id="email" name="cusmob" style="width:50%;margin-left: 24%" placeholder="<?php echo"$cumobile" ?>" required>
			  </div>
			 <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Customer Address:</label>
				<input type="text" class="form-control" id="email" name="cusadd" style="width:50%;margin-left: 24%" placeholder="<?php echo"$cuadd" ?>" required>
			  </div>
			   <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Customer Mail:</label>
				<input type="text" class="form-control" id="email" name="cusmail" style="width:50%;margin-left: 24%" placeholder="<?php echo"$cuemail" ?>" required>
			  </div>
                
			
			  </div>
                <br>
                <button type="submit" class="btn btn-default">Update Info</button>
               </div> 
			  
			  <br>
			</form> 
			<?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $cusName=$_POST["cusname"];
	            $cusmob=$_POST["cusmob"];
				$cusadd=$_POST["cusadd"];
				$cusmail=$_POST["cusmail"];
				$cusid=$_POST["cusid"];
				// Storing Selected Value In Variable
                
	            $conn=mysqli_connect("localhost","root","","easy_pharmacy");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
				

                $sql1="UPDATE customer SET cuName = '".$cusName."', cuAddress= '".$cusadd."', cuMobile='".$cusmob."',cuEmail='".$cusmail."' WHERE CuId = '".$cusid."';";

               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	                   if($result1){
		                  //header("Location:index.php");
                           $message = "Successfully Updated!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Updation Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
}
            ?>
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