<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>

	
		<a href="home.php"> Back</a> | 
		<a href="logout.php"> logout</a> 
		<br>
		
<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	$sql = "SELECT * FROM users"; 
	$results = mysqli_query($con,$sql);
	
?>		
		
		<table border=1>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>TYPE</td>
				<td>EmaiL</td>
			</tr>
			<tr>
			
			<?php	
			while($row = mysqli_fetch_array($results))
			{

					echo "<tr><form action=../php/delete.php method=post>";
					echo "<td><input type=number_format name=id value='".$row['id']."'></td>";
					echo "<td><input type=text name=username value='".$row['username']."'></td>";
					echo "<td><input type=number_format name=password value='".$row['password']."'></td>";
					echo "<td><input type=text name=type value='".$row['type']."'></td>";
					echo "<td><input type=text name=email value='".$row['email']."'></td>";
					echo "<td><input type=submit value=DELETE></td>";  //<a href="view_users.php"> UPDATE Users</a>
					echo "</form></tr>";
			}
			?>
			</tr>
			
	</table>
</body>
</html>