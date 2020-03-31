<?php


	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		$email = $_POST['email'];
		

		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
		
		if(!$con)
		{
			echo 'connection to server is denied';
		}
		/*if (!mysql_select_db($con,'webtech'))
		{
			echo 'Database is not selected';
		}*/
		

		$sql = "INSERT INTO `users`(`username`, `password`, `type`, `email`) VALUES ('$username','$password','$type','$email')";
		if(mysqli_query($con, $sql)){
			echo "NEW USER is created to table!";
		}else{
			echo "!! Error !!";
		}
		header("refresh:4;  url=../views/home.php");
	}
	

?>


