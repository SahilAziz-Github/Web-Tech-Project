<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'transportsystem');
		if(!$conn)
			{echo "not connected to database.";}
		else{
		return $conn;}
	}
?>

