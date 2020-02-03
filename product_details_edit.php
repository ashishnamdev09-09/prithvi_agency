<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN EDIT</title>
</head>
<body>
   <?php
    require("../db_connection.php");
    $pd_id=$_REQUEST['id'];
    $sql=$conn->prepare("SELECT *FROM product_details WHERE pd_id=?");
    $sql->bind_param("i",$pd_id);
    $sql->execute();
    
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    
    ?>

   <center>
    <form action="product_details_update.php" method="post">
        <input type="text" name="pd_id" id="pd_id" value="<?php echo $row['pd_id'];?>">
        
        <table border="3">
            <tr>
                <td>product category</td>
                <td><input type="text" name="pc_id" id="pc_id" value="<?php echo $row['pc_id'];?>"></td>
                
            </tr>
            
            <tr>
            <td>Product name</td>
            <td><input type="text" name="pd_name" id="pd_name" value="<?php echo $row['pd_name'];?>"></td>
             </tr>   
            
            
            <tr>
                <td>product sku code </td>
                <td><input type="text" name="pd_sku_code" id="pd_sku_code" value="<?php echo $row['pd_sku_code'];?>"></td>
            </tr>
            
            
            <tr>
                <td>product tax percent</td>
                <td><input type="text" name="pd_tax_percent" id="pd_tax_percent" value="<?php echo $row['pd_tax_percent'];?>"></td>
            </tr>
            
            
            <tr>
                <td>product image</td>
                <td><input type="text" name="pd_image" id="pd_image" value="<?php echo $row['pd_image'];?>"></td>
            </tr>
            
            
           
            
            <tr>
                <td>product description</td>
                <td><input type="text" name="pd_description" id="pd_description" value="<?php echo $row['pd_description'];?>"></td>
            </tr>
            
            <tr>
                <td>DATE</td>
                <td><input type="text" name="pd_date" id="pd_date" value="<?php echo $row['pd_date'];?>"></td>
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