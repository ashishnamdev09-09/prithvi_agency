<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN EDIT</title>
    <style>
        #sub{
            text-align: center;
        }
    </style>
</head>
<body>
   <?php
    require("../db_connection.php");
    $pc_id=$_REQUEST['id'];
    $sql=$conn->prepare("SELECT * FROM product_category WHERE pc_id=?");
    $sql->bind_param("i",$pc_id);
    $sql->execute();
    
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    
    ?>

   <center>
    <form action="main_category_update.php" method="post">
        <input type="text" name="pc_id" id="pc_id" value="<?php echo $row['pc_id'];?>">
        
        <table border="3">
            <tr>
                <td>Main category ID</td>
                <td><input type="text" name="mc_id" id="mc_id" value="<?php echo $row['mc_id'];?>"></td>
                
            </tr>
            
            <tr>
            <td>pc_name</td>
            <td><input type="text" name="pc_name" id="pc_name" value="<?php echo $row['pc_name'];?>"></td>
             </tr>  
                           
                <tr id="sub">
                    <td><input type="submit" value="update">
                    <input type="reset" value="reset"></td>
                </tr>                            
                        
            
        </table>       
        
    </form>  
   </center>
   
   
   
    </body>
</html>