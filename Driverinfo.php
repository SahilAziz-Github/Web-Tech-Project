<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
{
  
?>

<!DOCTYPE html>
		<html>
		<head>
			<title>Driver List</title>
			
			
			<style>
				body{
					background-image: url("u1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover;
				}
			</style>
			
		</head>
		<body>
			<h1> Driver List </h1>
            <table border="1" width=100%>
			<tr>
			
			<th>First Name</th>
			<th>Last Name</th>
			<th>Agency</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Rating</th>
			
			
			</tr>
			
			<tr>
			
			<td>Sadia</td>
			<td>Prodhan</td>
			<td>Alam</td>
			<td>0162378787</td>
			<td>sadia@gmail.com</td>
			<td>Female</td>
			<td>5.0</td>
			</tr>
				
			<tr>
			
			<td>Sachi</td>
			<td>Datta</td>
			<td>Alam</td>
			<td>017xxxxxxxxxx</td>
			<td>sachi@gmail.com</td>
			<td>Male</td>
			<td>4.5</td>
			
			</tr>
			
				
			</table>
			
			
			
			<fieldset>
				<legend>Search</legend>
				<label>Search : </label> <br/>
				<input type="text" name="usearch" placeholder ="Search Driver"><br/>
				<input type="submit" name="submit" value="Submit" /><br>
			</fieldset>
			
		
			<a href="Viewagency.php"><label><b>Return to Previous Page</b></label></a><br/>
			
			
			
		</body>
		</html>	

<?php




}




?>		
