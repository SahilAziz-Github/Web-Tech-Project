<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
{
  
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Customer Registration</title>
		<style>
			body{
			background-image: url("v1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover; }
		</style>
	</head>
	<body>

		


		<form action="Regcustomer.php" method="POST">
			<fieldset>
				<legend>Customer Account Information</legend>
				<label>Name : </label> <br/>
				<input type="text" name="uname" value='John'><br/>
				<label>Email :</label><br/>
				<input type="text" name="email" value='John@gmail.com'><br/>
				<label>Gender: </label><br/>
				<input type="text" name="gender" value='Male'><br/>
				<label>Mobile: </label><br/>
				<input type="text" name="gender" value='017xxxxxxxx'><br/>
				
				
				<label>Decision : </label><br/>
				<input type="radio" name="decision" value='Confirm'/> Confirm
				<input type="radio" name="decision" value='Cancel'/> Cancel <br/> <br/>
				<input type="submit" name="submit" value="Submit" /><br>

				<a href="Adminhome.php"><label><b>Return to Home Page</b></label></a>
			</fieldset>
		</form>
	</body>
</html>

<?php




}




?>