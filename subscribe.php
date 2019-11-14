<?php
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
<form method="POST" action="userView.php">
<fieldset style="width:300px">
<legend><b> SUBSCRIBE </b></legend>
Month: <input type='month' name='month'/><br>
Car Type: <input type='radio' name='ctype' value='ac'> AC
<input type='radio' name='ctype' value='nonAc'> Non AC<br>
Payment: <input type='radio' name='pay' value='card'> Card 
<input type='radio' name='pay' value='bkash'> BKash<br>
<input type='submit' name='submit' value='Submit'/>
<a href="userView.php"> Go Back </a>
</fieldset>
</form>
</body>
</html>