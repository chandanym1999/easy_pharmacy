<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="..........................................................................." />
    <meta name="description" content="........................................................................" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
    <link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
    <title>Add Medicine</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
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
                <a href="3"><img src="img/admin.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
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
            
                
                <div class=""> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.8;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                <h2>Admin Panel - Add Medicine</h2>
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Name:</label>
				<input type="text" class="form-control" id="user" name="mname" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Scientefic Name:</label>
				<input type="text" class="form-control" id="email" name="msname" style="width:50%;margin-left: 24%" >
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Price:</label>
				<input type="number" class="form-control" id="pwd" name="mprice" style="width:50%;margin-left: 24%" required>
                </div>
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Disease Category:</label>
				<input type="text" class="form-control" id="mbl"  name="mdisease" style="width:50%;margin-left: 24%">
			  </div>
                
			  
			  <button type="submit" class="btn btn-default">Add/Update Medicine</button>
                <br>
                <br>
                <a href="admedlist1.php">See List of medicines</a>
			</form> 
			<?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $medName=$_POST["mname"];
	            $scienteficName=$_POST["msname"];
	            $price=$_POST["mprice"];
	            $diseaseCategory=$_POST["mdisease"];
                
	            $conn=mysqli_connect("localhost","root","","easy_pharmacy");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
					$result = mysqli_query($conn,"SELECT * FROM medicine where medName='".$medName."';");
                //$row = mysqli_fetch_array($result);

                if(mysqli_num_rows($result)==0)
				{               $sql1="insert into medicine(medName,scienteficName,price,diseaseCategory) values('".$medName."', '".$scienteficName."', '".$price."', '".$diseaseCategory."');";

               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	                   if($result1){
		                  //header("Location:index.php");
                           $message = "Successfully Inserted!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Insertion Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }}
					   else{
	
               $sql1="UPDATE medicine SET price = '".$price."' WHERE medName ='".$medName."';";

               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	                   if($result1){
		                  //header("Location:index.php");
                           $message = "Successfully Updated!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Update Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
            }
            }
            ?>
			
		</div>
            
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
