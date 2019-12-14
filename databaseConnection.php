<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'transportsystem');
		return $conn;
	}
?>

