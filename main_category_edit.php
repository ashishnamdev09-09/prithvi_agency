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
    $mc_id=$_REQUEST['id'];
    $sql=$conn->prepare("SELECT * FROM main_category WHERE mc_id=?");
    $sql->bind_param("i",$mc_id);
    $sql->execute();
    
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    
    ?>

   <center>
    <form action="main_category_update.php" method="post">
        <input type="text" name="mc_id" id="mc_id" value="<?php echo $row['mc_id'];?>">
        
        <table border="3">
            <tr>
                <td>Main category name</td>
                <td><input type="text" name="mc_name" id="mc_name" value="<?php echo $row['mc_name'];?>"></td>
                
            </tr>
            
            <tr>
            <td>main category date</td>
            <td><input type="text" name="mc_date" id="mc_date" value="<?php echo $row['mc_date'];?>"></td>
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