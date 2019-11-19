<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
{
  
?>

<!DOCTYPE html>
		<html>
		<head>
			<title>Feedback Review Page</title>
			
			
			<style>
				body{
					background-image: url("u1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover;
				}
			</style>
			
		</head>
		<body>
			<h1> User Feedback </h1>
            <table border="1" width=100%>
			<tr>
			
			<th>From</th>
			<th>Type</th>
			<th>Body</th>
			<th>Action</th>
			
			</tr>
			
			<tr>
			
			<td>John</td>
			<td>Customer</td>
			<td><p>The Website is slow. Increase bandwidth</p></td>
			<td><p>bandwidth will be increased gradually</p></td>
			
			</tr>
				
			<tr>
			
			<td>Alam</td>
			<td>Agency</td>
			<td><p>Efficienct system!!</p></td>
			<td><p>Appreciated !!</p></td>
			
			</tr>
			
				
			</table>
			
			<a href="Adminhome.php"><label><b>Return to Home Page</b></label></a>
			
		
			
			
			
			
		</body>
		</html>		
<?php




}




?>
