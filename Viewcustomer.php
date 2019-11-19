<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
{
  
?>

<!DOCTYPE html>
		<html>
		<head>
			<title>Customer List</title>
			
			
			<style>
				body{
					background-image: url("t1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover;
				}
			</style>
			
		</head>
		<body>
			<h1> Customer List </h1>
            <table border="1" width=100%>
			<tr>
			
			<th>First Name</th>
			<th>Last Name</th>
			<th>User Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Gender</th>
			
			
			</tr>
			
			<tr>
			
			<td>Priya</td>
			<td>Roy</td>
			<td>priya</td>
			<td>016xxxxxxxxxx</td>
			<td>p@gmail.com</td>
			<td>Female</td>
			
			</tr>
				
			<tr>
			
			<td>Sachi</td>
			<td>Datta</td>
			<td>sachi</td>
			<td>017xxxxxxxxxx</td>
			<td>sachi@gmail.com</td>
			<td>Male</td>
			
			</tr>
			
				
			</table>
			
			
			
			<fieldset>
				<legend>Search</legend>
				<label>Search : </label> <br/>
				<input type="text" name="usearch" placeholder ="Search Customer"><br/>
				<input type="submit" name="submit" value="Submit" /><br>
			</fieldset>
			
		
			<a href="Adminhome.php"><label><b>Return to Home Page</b></label></a><br/>
			
			
			
		</body>
		</html>		
		
<?php




}




?>
