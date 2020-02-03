<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
		    <tr>
		        <td colspan="4"><center>Product Category</center></td>
		        <td> <a href="product_category_form.php">New</a></td>
		    </tr>
			<tr>
				<td>SL.NO:</td>
				<td>Main Category id:</td>
				<td>Product Category Name:</td>
				<td>Edit:</td>
				<td>Delete:</td>
			</tr>

			<?php
				include_once("../db_connection.php");
				$sno=1;
				$sql=$conn->Prepare ("SELECT * FROM product_category,main_category WHERE product_category.mc_id=main_category.mc_id");
				$sql->execute();
				$result=$sql->get_result();
				while ($row=$result->fetch_assoc()) 
				{
			  ?>
			  <tr>
			 		<td><?php echo $sno++;?></td>
			  		<td><?php echo $row["mc_name"];?></td>
			  		<td><?php echo $row["pc_name"];?></td>
			  		<td><a href="product_category_edit.php?id=<?php echo $row['pc_id'];?>">EDIT</a></td>
			  		<td><a href="product_category_delete.php?id=<?php echo $row['pc_id'];?>">DELETE</a></td>
			  </tr>
			  <?php
			}
			?>
		</table>

</body>
</html>