<?php 
	
		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
		
 
        $sql = "DELETE  FROM users WHERE ID='$_GET[id]'";
        
		if(mysqli_query($con,$sql))
			header("refresh:5;	url=../views/USER_LIST.php");
		else
			echo "!! Error !!";
	
?>
