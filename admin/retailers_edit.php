<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN EDIT</title>
</head>
<body>
   <?php
    require("../db_connection.php");
    $rt_id=$_REQUEST['id'];
    $sql=$conn->prepare("SELECT *FROM retailers WHERE rt_id=?");
    $sql->bind_param("i",$rt_id);
    $sql->execute();
    
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    
    ?>

   <center>
    <form action="retailers_update.php" method="post">
        <input type="text" name="rt_id" id="rt_id" value="<?php echo $row['rt_id'];?>">
        
        <table border="3">
            <tr>
                <td>Retailers EnterpriseName</td>
                <td><input type="text" name="rt_enterprise_name" id="rt_enterprise_name" value="<?php echo $row['rt_enterprise_name'];?>"></td>
                
            </tr>
            
            <tr>
            <td>Retailers name</td>
            <td><input type="text" name="rt_name" id="rt_name" value="<?php echo $row['rt_name'];?>"></td>
             </tr>   
            
            
            <tr>
                <td>Retailer contact</td>
                <td><input type="text" name="rt_contact" id="rt_contact" value="<?php echo $row['rt_contact'];?>"></td>
            </tr>
            
            
            <tr>
                <td>Retailers email</td>
                <td><input type="text" name="rt_email" id="rt_email" value="<?php echo $row['rt_email'];?>"></td>
            </tr>
            
            
            <tr>
                <td>Address</td>
                <td><input type="text" name="rt_address" id="rt_address" value="<?php echo $row['rt_address'];?>"></td>
            </tr>
            
            
           
            
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="rt_username" id="rt_username" value="<?php echo $row['rt_username'];?>"></td>
            </tr>
            
            <tr>
                <td>PASSWORD</td>
                <td><input type="text" name="rt_password" id="rt_password" value="<?php echo $row['rt_password'];?>"></td>
            </tr>
                  
                <tr>
                <td>DATE</td>
                <td><input type="text" name="rt_date" id="rt_date" value="<?php echo $row['rt_date'];?>"></td>
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