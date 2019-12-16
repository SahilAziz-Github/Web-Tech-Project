<?php
	session_start();
	require_once('../database/databaseFunctions.php');
	
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['pass'];
		if(empty($email) == true || empty($password) == true){
			echo "null submission!";
		}else{
			$count = validate($email, $password);
			if($count > 0){
				
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				//setcookie("username", $uname, time()+3600, "/");
				header('location: ../views/home.php');
			}else{
				alert("invalid email/password") ;
			}
		}
	}else{
		header('location: ../views/login.php');
	}
?>