<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <center>
		<form action="product_details_insert.php" method="POST">
		<h1>Product details</h1>
			<table border="6">
			
				<tbody>
					<tr>
							<td><label>Product Category ID:</label></td>
							<td>
                    <select name="pc_id" id="pc_id">
                        <option value="">--Select--</option>
                        <?php
                        include_once("../db_connection.php");
                        $sql=$conn->prepare("SELECT *FROM product_category");
                        
                        $sql->execute();
                        $result=$sql->get_result();
                        while($row=$result->fetch_assoc())
                        {
                            ?>
                            <option value="<?php echo $row['pc_id'];?> ">
                            <?php echo $row['pc_name'];?>   
                                
                            </option>
                            <?php
                        }
                        ?>
                        
                        
                    
                                                
                                                                                                
                    </select>
							    
							    
							    
							    
							    
							    
							    
							    
							</td>
					</tr>
			
			
					<tr>
							<td><label>Product Detail Name:</label></td>
						<td><input type="text" name="pd_name" id="pd_name"></td>
					</tr>
					<tr>
			
						<td><label>Product Detail sku Code:</label></td>
						<td><input type="text" name="pd_sku_code" id="pd_sku_code"></td>
					</tr>
					<tr>
						<td><label>Product Detail Tax Percent:</label></td>
						<td><input type="text" name="pd_tax_percent" id="pd_tax_percent"></td>
					</tr>
					<tr>
						<td><label>Product Detail Image</label></td>
						<td><input type="text" name="pd_image" id="pd_image"></td>
					</tr>
					<tr>
						<td><label>Product Detail Description:</label></td>
						<td><input type="text" name="pd_description" id="pd_description"></td>
					</tr>
					<tr>
					    <td><label>Product Detail Date</label></td>
					    <td><input type="date" name="pd_date" id="pd_date"></td>
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