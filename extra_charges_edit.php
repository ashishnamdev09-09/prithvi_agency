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
    $ec_id=$_REQUEST['id'];
    $sql=$conn->prepare("SELECT * FROM extra_charges WHERE ec_id=?");
    $sql->bind_param("i",$ec_id);
    $sql->execute();
    
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    
    ?>

   <center>
    <form action="extra_charges_update.php" method="post">
        <input type="text" name="ec_id" id="ec_id" value="<?php echo $row['ec_id'];?>">
        
        <table border="3">
            <tr>
                <td>MIN AMOUNT</td>
                <td><input type="text" name="ec_min_amount" id="ec_min_amount" value="<?php echo $row['ec_min_amount'];?>"></td>
                
            </tr>
            
            <tr>
            <td>MIN STOCK QTY</td>
            <td><input type="text" name="ec_min_stock_qty" id="ec_min_stock_qty" value="<?php echo $row['ec_min_stock_qty'];?>"></td>
             </tr>   
            
            
            <tr>
                <td>DATE</td>
                <td><input type="date" name="ec_date" id="ec_date" value="<?php echo $row['ec_date'];?>"></td>
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