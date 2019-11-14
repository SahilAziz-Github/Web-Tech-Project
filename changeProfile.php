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
<form method='POST' action='proCheck.php'>
<fieldset>
<table border='0' align='center'>
<tr>
<td>Name:</td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" name="pass" /></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="text" name="cpass" /></td>
</tr>
<tr>
<td colspan='2' align='right' ><input type="submit" name="submit" value="Save"/> <td>
</tr>
<tr><td colspan='2'><a href="userView.php"> Go Back </a></td></tr>
</table>
</fieldset>
</form>
</body>
</html>