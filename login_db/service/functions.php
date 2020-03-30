<?php
	
	require('db.php');
	
	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from login where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$login = mysqli_fetch_assoc($result);

		return $login;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from login";
		$result = mysqli_query($con, $sql);
		return $result;
	}

?>