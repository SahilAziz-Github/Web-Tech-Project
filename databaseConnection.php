<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'transportSystem');
		return $conn;
	}
?>