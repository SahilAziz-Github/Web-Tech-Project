<?php
	require_once('databaseConnection.php');

	function validate($email, $password){
		$conn = getConnection();
		$sql = "select * from employee where email='{$email}' && password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return count($user);
	}


	function register($name, $username, $email, $number, $password){
		$conn = getConnection();
		$sql = "insert into employee (name, username, email, number, password) values('{$name}', '{$username}','{$email}','{$number}','{$password}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id=".$id;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>