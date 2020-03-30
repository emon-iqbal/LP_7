<?php


	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
		
		if(!$con)
		{
			echo 'connection to server is denied';
		}
		/*if (!mysql_select_db($con,'webtech'))
		{
			echo 'Database is not selected';
		}*/
		

		$sql = "INSERT INTO `registration`(`username`, `password`, `email`, `type`) VALUES ('$username','$password','$email','$type')";
		if(mysqli_query($con, $sql)){
			echo "Registration is inserTed to table!";
		}else{
			echo "!! Error !!";
		}
		
		header("refresh:4;	url=../views/login.html");
	}
?>