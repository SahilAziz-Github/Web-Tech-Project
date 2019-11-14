<?php
session_start();
if(isset($_POST['submit']))
{
	$password = $_POST['pass'];
	$cpassword = $_POST['cpass'];
	$uname = $_POST['name'];
	$umail = $_POST['email'];
		if(empty($password) == true || empty($cpassword) == true || empty($uname)== true || empty($umail)== true) {
			echo "null submission!";
		}else{
			if($password == $cpassword && $uname==$password){
				
				$_SESSION['pass'] = $password;
				$_SESSION['cpass'] = $cpassword;
				$_SESSION['name'] = $uname;
				$_SESSION['email'] = $umail;
				header('location: profile.php');
			}else{
				echo "invalid password";
			}
		}
	}
?>