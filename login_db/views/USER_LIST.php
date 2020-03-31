<html>
<head>
	<title>USERS_LIST_[DB]</title>
</head> 
<body>

		<a href="home.php"> Back</a> | 
		<a href="logout.php"> logout</a> 
		<br>
		<br>
		
		<table border=1>
			<tr><center>
				<td><center><b>USERNAME</b></center></td>
				<td><center><b>PASSWORD</b></center></td>
				<td><center><b>TYPE</b></center></td>
				<td><center><b>EmaiL</b></center></td>
				<td><center><b>LINKs</b></center></td>
			</tr>
			<tr>
		<?php
			$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
			$sql = "SELECT * FROM users"; 
			$results = mysqli_query($con,$sql);
		
			while($row = mysqli_fetch_array($results))
			{

					echo "<tr>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['password']."</td>";
					echo "<td>".$row['type']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td><a href=../php/delete.php?id=".$row['ID'].">Remove</a> || <a href=../views/UPDATE_users.php>UPDATE</a></td>";
					echo "</tr>";
			}
			?>
			</tr>
			
	</table>
	</form>
</body>
</html>
