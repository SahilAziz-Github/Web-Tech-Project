<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
{
  
?>

<!DOCTYPE html>
<html>
	<head>
	<title> Delete Account </title>
		<style>
			body{
			background-image: url("s1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover; }
		</style>
	</head>
	<body>

		


		<form action="Delete.php" method="POST">
			<fieldset>
				<legend>Account Information</legend>
				<label>Name : </label> <br/>
				<input type="text" name="uname" value='Anamul'><br/>
				<label>Email :</label><br/>
				<input type="text" name="email" value='htransports@gmail.com'><br/>
				<label>Account Type : </label><br/>
				<input type="radio" name="atype" value='Customer'/> Customer
				<input type="radio" name="atype" value='Agency'/> Agency <br/> <br/>
				
				
				<input type="submit" name="submit" value="Delete" /><br>

				<a href="Adminhome.php"><label><b>Return to Home Page</b></label></a>
			</fieldset>
		</form>
	</body>
</html>
<?php




}




?>
