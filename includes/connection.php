<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="easy_pharmacy";
	
	// connect to mysql
	
	$con = mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");
	
	// select the db
	
	mysqli_select_db($con,$db) or die("Sorry, can't select the database.");

?>