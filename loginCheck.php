<?php
session_start();
if(isset($_POST['submit']))
{
	$uname = $_POST['name'];
	$password = $_POST['pass'];
	
		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{
			if($uname == $password){
				
				$_SESSION['name'] = $uname;
				$_SESSION['password'] = $password;
				header('location: userView.php');
			}else{
				echo "invalid user name/password";
			}
		}
	}
?>