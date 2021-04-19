<?php
	if(isset($_GET['action']) && $_GET['action']=="add"){
		
		$id=intval($_GET['id']);
		
		if(isset($_SESSION['cart1'][$id])){
			
			$_SESSION['cart1'][$id]['quantity']++;
			
		}else{
			
			$sql_s="SELECT * FROM labs
				WHERE labId={$id}";
			$query_s=mysqli_query($con,$sql_s);
			if(mysqli_num_rows($query_s)!=0){
				$row_s=mysqli_fetch_array($query_s);
				
				$_SESSION['cart1'][$row_s['labId']]=array(
						"quantity" => 1,
						"price" => $row_s['labprice']
					);
				
				
			}else{
				
				$message="This product id it's invalid!";
				
			}
			
		}
		
	}	
	if(isset($_GET['action']) && $_GET['action']=="delete"){
		
		$id=intval($_GET['id']);
		
		if(isset($_SESSION['cart1'][$id])){
			if($_SESSION['cart1'][$id]['quantity']>=1){
			
			$_SESSION['cart1'][$id]['quantity']--;
			}
		}
		
	}

?>
	<h1>Lab List</h1>
	<?php
		if(isset($message)){
			echo "<h2>$message</h2>";
		}
	?>
			<table>
			    <tr>
			        <th>Name</th>
			        <th>Price</th>
			        <th>Action</th>
					<th>Delete</th>
			    </tr>
			    
				<?php
				
					$sql="SELECT * FROM labs ORDER BY labName ASC";
					$query=mysqli_query($con,$sql);
					
					while ($row=mysqli_fetch_array($query)) {
						
				?>
						<tr>
						    <td><?php echo $row['labName'] ?></td>
						    <td><?php echo $row['labprice'] ?>/-</td>
						    <td><a style="background:#3BB1E4;color:black;padding:7px" href="cusfindphar.php?page=products1&action=add&id=<?php echo $row['labId'] ?>">Add to cart</a></td>
							<td><a style="background:#3BB1E4;color:black;padding:7px" href="cusfindphar.php?page=products1&action=delete&id=<?php echo $row['labId'] ?>">Delete</a></td>
						</tr>
				<?php
						
					}
				
				?>
			    
			</table>