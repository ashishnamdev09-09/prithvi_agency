<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <center>
		<form action="stock_details_insert.php" method="POST">
			<table border="6">
			<h1>Stock Details Page</h1>
				<tbody>
					<tr>
							<td><label>Product id:</label></td>
							<td>
                   <select name="pd_id" id="pd_id">
                        <option value="">--Select--</option>
                        <?php
                        include_once("../db_connection.php");
                        $sql=$conn->prepare("SELECT *FROM product_details");
                        
                        $sql->execute();
                        $result=$sql->get_result();
                        while($row=$result->fetch_assoc())
                        {
                            ?>
                            <option value="<?php echo $row['pd_id'];?> ">
                            <?php echo $row['pd_name'];?>   
                                
                            </option>
                            <?php
                        }
                        ?>
                        
                        
                    
                                                
                                                                                                
                    </select>
							    s
                    

							</td>
					</tr>
			
			
					<tr>
							<td><label>Stock Available Qty:</label></td>
						<td><input type="text" name="sd_avail_qty" id="sd_avail_qty"></td>
					</tr>
					<tr>
			
						<td><label>Stock Minimum Order Qty:</label></td>
						<td><input type="text" name="sd_min_order_qty" id="sd_min_order_qty"></td>
					</tr>
					<tr>
						<td><label>Stock Detail MRP:</label></td>
						<td><input type="text" name="sd_mrp" id="sd_mrp"></td>
					</tr>
					<tr>
						<td><label>Stock Detail PTR:</label></td>
						<td><input type="text" name="sd_ptr" id="sd_ptr"></td>
					</tr>
					<tr>
						<td><label>Stock Detail PTR Discount:</label></td>
						<td><input type="text" name="sd_ptr_discount" id="sd_ptr_discount"></td>
					</tr>
					<tr>
					    <td><label>Stock Detail Scheme Unit Price:</label></td>
					    <td><input type="text" name="sd_scheme_unit_price" id="sd_scheme_unit_price"></td>
					</tr>
					<tr>
					    <td><label>Stock Detail Total Amount::</label></td>
					    <td><input type="text" name="sd_total_amount" id="sd_total_amount"></td>
					</tr>
					<tr>
						<td><label>Stock Detail Net Profit:</label></td>
						<td><input type="text" name="sd_net_profit" id="sd_net_profit"></td>
					</tr>
					<tr>
						<td><label>Stock Detail Status:</label></td>
						<td><input type="text" name="sd_status" id="sd_status"></td>
					</tr>
					<tr>
						<td><label>Stock Detail Scheme Status:</label></td>
						<td><input type="text" name="sd_scheme_status" id="sd_scheme_status"></td>
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