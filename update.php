<?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $labName=$_POST["labname"];
	            $labprice=$_POST["labprice"];
				// Storing Selected Value In Variable
                
	            $conn=mysqli_connect("localhost","root","","easy_pharmacy");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
	
               $sql1="UPDATE labs SET labprice = $labprice WHERE labName = $labName;";

               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	                   if($result1){
		                  //header("Location:index.php");
                           $message = "Successfully Added!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Addition Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
            }
            ?>