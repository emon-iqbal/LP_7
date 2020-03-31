<?php 
	
		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
		
		/*if(!$con)
		{
			echo 'connection to server is denied';
		}
		*/
 
        $sql = " UPDATE users SET USERNAME = '$_POST[username]', PASSWORD = '$_POST[password]', TYPE='$_POST[type]', EMAiL='$_POST[email]' WHERE ID='$_POST[ID]'";
        
		if(mysqli_query($con, $sql))
		{
			echo "Data is updated to ~users~ table!";
			
			
		}
		else
		{
			echo "!! Error !!";
		}
		
		header("refresh:4;	url=../views/home.php");
		
?>
