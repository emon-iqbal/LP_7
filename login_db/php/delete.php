<?php 
	
	
		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
		
		/*if(!$con)
		{
			echo 'connection to server is denied';
		}
		*/
		
        $sql = "DELETE FROM 'users' WHERE ID='$_POST[id]', USERNAME='$_POST[username]', PASSWORD='$_POST[password]', TYPE='$_POST[type]', EmaiL='$_POST[email]'"; 
        
		if(mysqli_query($con, $sql))
		{
			header("refresh:5;	url=../views/delete_users.php");
			
		}
		else
		{
			echo "!! Error !!";
		}
		
		header("refresh:3;	url=../views/home.php");
	
	
?>