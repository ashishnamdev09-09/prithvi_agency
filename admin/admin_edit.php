<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN EDIT</title>
</head>
<body>
   <?php
    require("../db_connection.php");
    $ad_id=$_REQUEST['id'];
    $sql=$conn->prepare("SELECT *FROM admin WHERE ad_id=?");
    $sql->bind_param("i",$ad_id);
    $sql->execute();
    
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    
    ?>

   <center>
    <form action="admin_update.php" method="post">
        <input type="text" name="ad_id" id="ad_id" value="<?php echo $row['ad_id'];?>">
        
        <table border="3">
            <tr>
                <td>NAME</td>
                <td><input type="text" name="ad_name" id="ad_name" value="<?php echo $row['ad_name'];?>"></td>
                
            </tr>
            
            <tr>
            <td>CONTACT</td>
            <td><input type="text" name="ad_contact" id="ad_contact" value="<?php echo $row['ad_contact'];?>"></td>
             </tr>   
            
            
            <tr>
                <td>ADDRESS</td>
                <td><input type="text" name="ad_address" id="ad_address" value="<?php echo $row['ad_address'];?>"></td>
            </tr>
            
            
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="ad_email" id="ad_email" value="<?php echo $row['ad_email'];?>"></td>
            </tr>
            
            
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="ad_username" id="ad_username" value="<?php echo $row['ad_username'];?>"></td>
            </tr>
            
            
            <tr>
                <td>PASSWORD</td>
                <td><input type="text" name="ad_password" id="ad_password" value="<?php echo $row['ad_password'];?>"></td>
            </tr>
            
            
            <tr>
                <td>DATE</td>
                <td><input type="text" name="ad_date" id="ad_date" value="<?php echo $row['ad_date'];?>"></td>
            </tr>
                    
                                
                <tr>
                    <td><input type="submit" value="update">
                    <input type="reset" value="reset"></td>
                </tr>                            
                        
            
        </table>       
        
    </form>  
   </center>
   
   
   
    </body>
</html>