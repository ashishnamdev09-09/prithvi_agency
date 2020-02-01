<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	
	<style>
        .input_grp input{
            border-radius: 5px;
        }
        
        .input_grp label{
                font-size: 25px;    
        }
        #ad_address{
            border-radius: 6px;
        }
        
        
        
    </style>
</head>
<body>
		<form action="admin_insert.php" method="POST">
		<center>
		<div class="input_grp">
			<table >
			
			<h1>Admin Page</h1>
			<hr/>
				<tbody>
					<tr>
							<td><label>Name:</label></td>
							<td><input type="text" name="ad_name" id="ad_name"></td>
					</tr>
			
			
					<tr>
							<td><label>Contact:</label></td>
						<td><input type="text" name="ad_contact" id="ad_contact"></td>
					</tr>
					<tr>
			
						<td><label>Address:</label></td>
						<td><textarea name="ad_address" id="ad_address" style="margin: 0px; width: 168px; height: 38px;"></textarea></td>
					</tr>
					<tr>
						<td><label>Email:</label></td>
						<td><input type="email" name="ad_email" id="ad_email"></td>
					</tr>
					<tr>
						<td><label>UserName</label></td>
						<td><input type="text" name="ad_username" id="ad_username"></td>
					</tr>
					<tr>
						<td><label>Password:</label></td>
						<td><input type="Password" name="ad_password" id="ad_password"></td>
					</tr>
					<tr>
					    <td><label>Date</label></td>
					    <td><input type="date" name="ad_date" id="ad_date"></td>
					</tr>
					<tr>
					<td></td>
						<td ><input type="submit" value="submit">
						<input type="reset" value="reset">
						<input type="button" value="cancel" onclick="window.location.href='admin_view.php'">
						</td>
						
					</tr>

				</tbody>
			</table>
			</div>
			</center>
		</form>

</body>
</html>