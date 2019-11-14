<?php
session_start();
if(isset($_POST['submit']))
{
	$password = $_POST['pass'];
	$cpassword = $_POST['cpass'];
	$uemail = $_POST['email'];
		if(empty($password) == true || empty($cpassword) == true){
			echo "null submission!";
		}else{
			if($password == $cpassword){
				
				$_SESSION['pass'] = $password;
				$_SESSION['cpass'] = $cpassword;
				$_SESSION['email'] = $uemail;
				header('location: login.php');
			}else{
				echo "invalid password";
			}
		}
	}else{
		header('location: registration.php');
	}
?>