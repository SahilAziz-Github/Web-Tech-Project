<?php
session_start();
if(isset($_SESSION['name'])){
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-image: url(s2.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
</head>
<body>
<form method="POST" style="width:500px; height:500px; display:inline-block;">
<fieldset style="background:url(s2.jpg) no repeat;">
<table border="0" width=100%>
<tr>

<td ><a href="route.php"> Route </a></td>
<td ><a href="profile.php"> Profile </a></td>
<td > <a href="subscribe.php"> Subscribe! </a></td>
<td> <a href="rate.php"> Rate </a></td>
<td><a href="login.php"> Log Out </a></td>


</tr>
</table>
<h1 align='center'> Welcome <?=$_SESSION['name']?> ! </h1>

<!--<input type="text" name="searchBar" size="80" placeholder="search" /> 
<td><input type="submit" name="searchButton" value="Search"/>-->

<table border='0'>
<tr>
<td>Pickup Location: </td>
<td> <input type="text" name="pickBar" /> </td>
</tr>
<tr>
<td>Drop off Location: </td>
<td> <input type="text" name="dropBar" /></td>
</tr>
<tr>
<td>Pickup Time:</td>
<td>  <input type="time" name="userTime"/></td>
</tr>
<tr>
<td colspan='2'> <button type="submit" formaction="carBook.php"> Search </button>  </td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
<?php
}
?>