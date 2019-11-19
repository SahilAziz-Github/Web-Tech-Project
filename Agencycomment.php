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
					background-image: url("u1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover;
				}
			</style>
			
		</head>
		<body>
			<h1> Agency Comments </h1>
            <table border="1" width=100%>
			<tr>
			
			<th>From Customer</th>
			<th>For Agency</th>
			<th>Comments</th>
			<th>Date</th>
			
			
			</tr>
			
			<tr>
			
			<td>priya</td>
			<td>Alam</td>
			<td><p>Supplies professional Driver</p></td>
			<td>02-11-2019</td>
			
			
			</tr>
				
			
			
				
			</table>
			
			
			
			<fieldset>
				<legend>Search Comment</legend>
				<label>Search : </label> <br/>
				<input type="text" name="usearch" placeholder ="Search Agency"><br/>
				<input type="submit" name="submit" value="Submit" /><br>
			</fieldset>
			
		
			<a href="Viewagency.php"><label><b>Return to Previous Page</b></label></a><br/>
			
			
			
		</body>
		</html>		
<?php




}




?>