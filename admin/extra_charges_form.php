<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
        .input_grp label{
            font-size: 20px;   
        }
        .input_grp input{
            border-radius: 10px;
        }
    </style>
</head>
<body>
		<form action="extra_charges_insert.php" method="POST">
		<center>
		
		<h1>Charges Page</h1>
		<div class="input_grp">
			<table>
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
					    <td></td>
						<td colspan="1"><input type="submit" name="submit">
						<input type="reset" name="reset">
						<input type="button" value="Cancel" onclick="window.location.href='extra_charges_view.php'">
						</td>
					</tr>

				</tbody>
			</table>
			</div>
			</center>
		</form>
</body>
</html>