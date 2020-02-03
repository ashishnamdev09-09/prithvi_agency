<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <center>
		<form action="product_category_insert.php" method="POST">
			<table border="6">
			<h1>Product Category</h1>
				<tbody>
					<tr>
							<td><label>Main Category id:</label></td>
							<td>
							    
							    <select name="mc_id" id="mc_id">
                                <option value="">--Select--</option>
                                <?php
                            include_once("../db_connection.php");
                            $sql=$conn->prepare("SELECT *FROM main_category");
                            
                            $sql->execute();
                            $result=$sql->get_result();
                            while($row=$result->fetch_assoc())
                            {
                            ?> 
                            <option value="<?php echo $row['mc_id'];?>">
                            <?php echo $row['mc_name'];?>
                            <?php echo $row['mc_name'];?>
                                    </option>  
                            <?php
                            }
                            ?>
                                </select>        
                                    
                                    
                                    
                          
							</td>
					</tr>
			
			
					<tr>
							<td><label>Product Category Name: </label></td>
						<td><input type="text" name="pc_name" id="pc_name"></td>
					</tr>
					<tr>
						<td colspan="1"><input type="submit" name=""></td>
						<td><input type="reset" name=""></td>
					</tr>

				</tbody>
			</table>
			
			
		</form>
</center>
</body>
</html>