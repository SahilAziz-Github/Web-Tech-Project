<?php
	
	require_once('../database/databaseFunctions.php');

	if(isset($_POST['submit'])){

        $name = $_POST['name'];
		$username = $_POST['uname'];
		$password = $_POST['pass'];
		$email = $_POST['email'];
		$cpassword = $_POST['cpass'];
		$number = $_POST['number'];

if(empty($name)==true || empty($username)==true ||  empty($email)==true ||  empty($password)==true || empty($number)==true  )
	{echo "null submition";}
else{
			$status = register($name, $username, $email, $number, $password );

			if($status){

				header('location: ../views/login.php');
			}
			else
			{
				header('location: ../views/registration.php');
			}
		}
}
	


?>