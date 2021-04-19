<?php
session_start();
?>
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
    <title>Find Doctor</title>
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


<body class="cusfamb" class="brwsmdcn" style="font-family: 'Yusei Magic', sans-serif;">
<style>
.cusfamb {
	background: url(images/doc.jpg) no-repeat center center fixed;
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
    <div class="">
        <div class="header-top">
            <div class="container">
                <a href="cupanel.php"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
                
                <div class="menu col-md-5" style="margin-left: 24%;margin-top: 2%">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="cushome.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Home</a></li>
                        <li><a href="cart/index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Cart</a></li>
                        <li><a href="index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Logout</a></li>

                    </ul>
                </div>

            </div>
        </div>


    </div>

    <div class="main-area">




        <div class="">
            <form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;" method="post" action=cusfindambulence2.php >
                <h2>Patient's Panel - Find Doctor</h2>

                <br>
               

                <br>
                <br>
                <div class="form-group center">
                    
                <div class="form-group center">
                    <input style="width:250px;height:35px;background:transparent;border:1px solid black;" type="text" name="search" placeholder="Search Department">

                    <button type="submit" style="background:#56CDF0;border:1px solid #56CDF0;padding:6px 20px;border-radius:5px;" class="btn btn-default">Search</button>
                    <br>
                </div>
    
		
		<div class="result_table" style="margin-left: 2%;text-align: center">
            <table style="background:white;border:1px solid black;" class="text-center">
                <thead>
                    <tr>
                        <th style="border:1px solid black">Doctor Name</th>
                        <th style="border:1px solid black">Department</th>
                        <th style="border:1px solid black">Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      {
//                          $str1=$_POST["search"];
                          $con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($con,'easy_pharmacy');

                        $result = mysqli_query($con,"SELECT * FROM doctor;") or die("Failed to fetch".mysql_error());

                        //$row = mysqli_fetch_array($result);
                        
                           if( mysqli_num_rows( $result)==0 ){
                            echo '<tr><td colspan="3">No Rows Returned</td></tr>';
                        }
                    
                        else{
                        while( $row = mysqli_fetch_assoc( $result ) ){
                            echo "<tr><td>{$row['DoctorName']}</td><td>{$row['Department']}</td><td>{$row['Contact']}</td></tr>\n";
                        }
                    }
                      }
                         
                        
                        
                ?>
                
                </tbody>
            </table>
                </div>
            </div>
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
