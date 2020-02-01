<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form action="extra_charges_insert.php" method="POST">
		<center>
		<h1>Charges Page</h1>
			<table border="6">
				<tbody>
					<tr>
							<td><label>Minimum Amount:</label></td>
							<td><input type="text" name="ec_min_amount" id="ec_min_amount"></td>
					</tr>
			
			
					<tr>
							<td><label>Minimum Stock Quantity: </label></td>
						<td><input type="text" name="ec_min_stock_qty" id="ec_min_stock_qty"></td>
					</tr>
					<tr>
			
						<td><label>Date:</label></td>
						<td><input type="date" name="ec_date" id="ec_date"></td>
					</tr>
					<tr>
						<td colspan="1"><input type="submit" name=""></td>
						<td><input type="reset" name=""></td>
					</tr>

				</tbody>
			</table>
			
			</center>
		</form>
</body>
</html>