<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="index.php">back</a>
		<table border="1">
		    <tr>
		        <td colspan="8">ADMIN</td>
		       <td><a href="admin_form.php">New</a></td>
		    </tr>
			<tr>
				<td>SL.NO:</td>
				<td>Name:</td>
				<td>Contact:</td>
				<td>Address:</td>
				<td>E-Mail:</td>
				<td>UserName:</td>
				<td>Password:</td>
				<td>Edit:</td>
				<td>Delete:</td>
			</tr>

			<?php
				include_once("../db_connection.php");
				$sno=1;
				$sql=$conn->Prepare ("SELECT * FROM admin");
				$sql->execute();
				$result=$sql->get_result();
				while ($row=$result->fetch_assoc()) 
				{
			  ?>
			  <tr>
			 		<td><?php echo $sno++;?></td>
			  		<td><?php echo $row["ad_name"];?></td>
			  		<td><?php echo $row["ad_contact"];?></td>
			  		<td><?php echo $row["ad_address"];?></td>
			  		<td><?php echo $row["ad_email"];?></td>
			  		<td><?php echo $row["ad_username"];?></td>
			  		<td><?php echo $row["ad_password"];?></td>
			  		<td><a href="admin_edit.php?id=<?php echo $row['ad_id'];?>">EDIT</a></td>
			  		<td><a href="admin_delete.php?id=<?php echo $row['ad_id'];?>">DELETE</a></td>
			  </tr>
			  <?php
			}
			?>
		</table>

</body>
</html>