<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
{
  
?>
<!DOCTYPE html>
		<html>
		<head>
			<title>History</title>
			
			
			<style>
				body{
					background-image: url("v1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover;
				}
			</style>
			
		</head>
		<body>
			<h1> History Log </h1>
            <table border="1" width=100%>
			<tr>
			
			<th>Customer</th>
			<th>Agency</th>
			<th>Driver</th>
			<th>Status</th>
			<th>Date</th>
			
			</tr>
			
			<tr>
			
			<td>John</td>
			<td>Alam</td>
			<td>Kuddus</td>
			<td>Completed</td>
			<td>03-11-2019</td>
			
			</tr>
				
			<tr>
			
			<td>Tom</td>
			<td>Alam</td>
			<td>Salam</td>
			<td>Ongoing</td>
			<td>03-11-2019</td>
			
			</tr>
			
				
			</table>
			
			<a href="Adminhome.php"><label><b>Return to Home Page</b></label></a>
			
		
			
			
			
			
		</body>
		</html>

<?php




}




?>		
