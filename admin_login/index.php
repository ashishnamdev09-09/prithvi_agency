<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        
        #login1{
            font-size: 30px;
        }
       
        
    </style>
</head>
<body >
 <center>
 
  <form action="login_check.php" method="post">
   <table >
   
   <tr>
       <th colspan="4" id="login1">LOGIN</th>
   </tr>
   
    <tr>
       <td><label>USERNAME:</label></td>
        <td><input type="text" name="ad_username"></td>
        
    </tr>
     
    <tr>
        <td><label>PASSWORD:</label></td>
        <td><input type="text" name="ad_password"></td>
    </tr>  
     
     <tr>
         <td><input type="submit" value="submit"></td>
         <td><input type="reset" value="reset"  ></td>
              </tr>
      
       
   </table>
   </form>
    </center>
</body>
</html>