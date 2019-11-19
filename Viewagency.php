<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
{
  
?>

<!DOCTYPE html>
		<html>
		<head>
			<title>Agency List</title>
			
			
			<style>
				body{
					background-image: url("t1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover;
				}
			</style>
			
		</head>
		<body>
			<h1>Agency List</h1>
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
			
			<td>Nazmul</td>
			<td>Tanmoy</td>
			<td>nazmul</td>
			<td>016xxxxxxxxxx</td>
			<td>hinternational@gmail.com</td>
			<td>Male</td>
			
			</tr>
				
			<tr>
			
			<td>Sachi</td>
			<td>Datta</td>
			<td>sachi</td>
			<td>017xxxxxxxxxx</td>
			<td>sachitransports@gmail.com</td>
			<td>Male</td>
			
			</tr>
			
				
			</table>
			<a href="Driverinfo.php"><label><b>View Driver Information</b></label></a><br>
			
			
			<fieldset>
				<legend>Search</legend>
				<label>Search : </label> <br/>
				<input type="text" name="usearch" placeholder ="Search Agency"><br/>
				<input type="submit" name="submit" value="Submit" /><br>
			</fieldset>
			<br>
			<a href="Agencycomment.php"><label><b>View Agency Comments</b></label></a><br>
			<br>
			<a href="Adminhome.php"><label><b>Return to Home Page</b></label></a><br>
			
		
			
			
			
			
		</body>
		</html>		
		
<?php




}




?>
