<?php
session_start();
?>
<html>
<head>
<style>
body{
	background-image: url(s1.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
</head>
<body>
<form method ="POST">
<fieldset align='center'>
<table align = 'right' border='0'>
<tr><td><a href="userView.php"> Go Home </a></td></tr></table>
<h1><b> Your Profile </b></h1>
<table align='center' border='1' width=40%>
<tr>
<td> Name </td>
<td> <?=$_SESSION['name']?> </td>
</tr>
<tr>
<td> Email </td>
<td><?=$_SESSION['email']?> </td>
</tr>
<tr>
<td> Password </td>
<td> <?=$_SESSION['pass']?></td>
</tr>
</table>
<button type="submit" formaction="changeProfile.php"> Change Profile </button> 
</fieldset>
</form>
</body>
</html>