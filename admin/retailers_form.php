<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
        .input_grp input{
border-radius: 10px;
            font-size: 18px;
        }
        .input_grp label{
            font-size: 23px;  
            
        }
        .input_grp h1{
            text-decoration: underline;
        }
        
        #rt_address{
                border-radius: 10px;
            font-size: 20px;
        }
     
        </style>
    
</head>
<body>
    <center>
		<form action="retailers_insert.php" method="POST">
		<div class="input_grp">
			<table >
			<h1 >Retailers</h1>
			
				<tbody>
					<tr>
							<td><label>Retailer Enterprise Name:</label></td>
							<td><input type="text" name="rt_enterprise_name" id="rt_enterprise_name"></td>
					</tr>
				
			
					<tr>
							<td><label>Retailer Name:</label></td>
						<td><input type="text" name="rt_name" id="rt_name"></td>
					</tr>
					<tr>
			
						<td><label>Retailer Contact:</label></td>
						<td><input type="text" name="rt_contact" id="rt_contact"></td>
					</tr>
					<tr>
						<td><label>Retailer E-Mail:</label></td>
						<td><input type="text" name="rt_email" id="rt_email"></td>
					</tr>
					<tr>
						<td><label>Retailer Address:</label></td>
						<td ><textarea name="rt_address" id="rt_address" style="margin: 0px; width: 221px; height: 69px;"></textarea></td>
					</tr>
					<tr>
						<td><label>Retailer UserName:</label></td>
						<td><input type="text" name="rt_username" id="rt_username"></td>
					</tr>
					<tr>
					    <td><label>Retailer Password:</label></td>
					    <td><input type="password" name="rt_password" id="rt_password"></td>
					</tr>
					<tr>
					    <td><label>Retailer Date</label></td>
					    <td><input type="date" name="rt_date" id="rt_date"></td>
					</tr>
					<tr>
					    <td></td>
						<td><input type="submit" value="submit">
						<input type="reset" value="reset">
						<input type="button" value="cancel" onclick="window.location.href='retailers_view.php'">
						</td>
						
					</tr>
					

				</tbody>

			</table>
			
            </div>
		</form>
</center>
</body>
</html>