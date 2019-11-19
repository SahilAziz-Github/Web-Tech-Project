<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
{
  
?>

<!DOCTYPE html>
		<html>
		<head>
			<title>Admin Home Page</title>
			<table width=100%>
			<tr>
			<td><h1 style=font-size:60px align= "center">Welcome <?php  echo $_SESSION["uname"]; ?>!!</h1></td>
			<td width=30%><a href="Logout.php" align="center"><h2>Logout</h2></a></td>
			</tr>
			</tr>
			</table>
			
			<style>
				body{
					background-image: url("s1.jpg");
        	background-repeat:no-repeat;
        	background-size:cover;
				}
			</style>
			
		</head>
		<body>
            <table border="1" width=100%>
			<tr>
			<td align="center" colspan="3"><h1>Administration Panel</h1></td>
			</tr>
			<tr>
			<td width=30%>
				<h3><li><a href="Regcustomer.php">Register Customers </a></li></h3>
				<h3><li><a href="Regagency.php">Register Agency</a></li></h3>
				<h3><li><a href="Regdriver.php">Register Driver</a></li></h3>
				<h3><li><a href="Viewcustomer.php">View Customer List</a></li></h3>
				<h3><li><a href="Viewagency.php">View Service Agency</a></li></h3>
				<h3><li><a href="Delete.php">Delete Accounts</a></li></h3>
				<h3><li><a href="Feedback.php">Feedbacks</a></li></h3>
				<h3><li><a href="History.php">History Log</a></li></h3>
			</td>
			<td>
				<p><h4>Basically we are trying to make the employee transport management system a bit more easy and less complex procedure.
				We have verified transportation agencies who deliver top notch vehicles with professional drivers ensuring superior service.</h4> </p>
				
			</td>
			</tr>
				
	
				
			</table>
		
			</td>
			</tr>
			</table>
			
			
			
		</body>
		</html>		
		
<?php




}




?>
