<?php
	session_start();
	require("../includes/connection.php");
	if(isset($_GET['page'])){
		
		$pages=array("products1", "cart1");
		
		if(in_array($_GET['page'], $pages)) {
			
			$_page=$_GET['page'];
			
		}else{
			
			$_page="products1";
			
		}
		
	}else{
		
		$_page="products1";
		
	}

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
	<title>Customer Cart</title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" media="all" />
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../style.css" media="all" />
	<link rel="shortcut icon" href="../img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="../js/modernizr.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</head>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/reset.css" />
	<link rel="stylesheet" href="../css/style.css" />
	
	<title>Shopping Cart</title>
	

</head>

<body class="brwsmdcn" style="font-family: 'Yusei Magic', sans-serif;">
<style>
.brwsmdcn{
	background: url(../images/lab.jpg) no-repeat center center fixed;
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
                <a href="cupanel.php"><img src="../img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 45%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="../cushome.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Home</a></li>
						<li><a href="#" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Cart</a></li>
						<li><a href="../index.php" style="color:black;font-family: 'Yusei Magic', sans-serif;font-size:18px;text-decoration:none;" class="nav-link">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
	<div id="container">

		<div id="main">
			
			<?php require($_page.".php"); ?>

		</div><!--end of main-->
		
		<div id="sidebar">
			<h1>Cart</h1>
			<?php
			
				if(isset($_SESSION['cart1'])){
					
					$sql="SELECT * FROM labs WHERE labId IN (";
					
					foreach($_SESSION['cart1'] as $id => $value) {
						$sql.=$id.",";
					}
					
					$sql=substr($sql, 0, -1).") ORDER BY labName ASC";
					$query=mysqli_query($con,$sql);
					while($row=mysqli_fetch_array($query)){
						
					?>
					<?php if($_SESSION['cart1'][$row['labId']]['quantity']>=1){ ?>
						<p style="padding:7px;font-weight:bold;font-size:15px;"><?php echo $row['labName'] ?> x <?php echo $_SESSION['cart1'][$row['labId']]['quantity'] ?></p>
					<?php } ?>
					<?php
						
					}
				?>
					<hr />
					<a style="background:#3BB1E4;color:black;padding:10px;" href="cusfindphar.php?page=cart1">Go to cart</a>
				<?php
					
				}else{
					
					echo "<p>Your Cart is empty. Please add some products.</p>";
					
				}
				
			//session_destroy();
			?>
			
			
		</div><!--end of sidebar-->
		
		
		

	</div><!--end container-->
	
	
	<div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>

</body>
</html>
