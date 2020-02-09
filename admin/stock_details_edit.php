<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN EDIT</title>
</head>
<body>
   <?php
    require("../db_connection.php");
    $sd_id=$_REQUEST['id'];
    $sql=$conn->prepare("SELECT *FROM stock_details WHERE sd_id=?");
    $sql->bind_param("i",$sd_id);
    $sql->execute();
    
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    
    ?>

   <center>
    <form action="stock_details_update.php" method="post">
        <input type="text" name="sd_id" id="sd_id" value="<?php echo $row['sd_id'];?>">
        
        <table border="3">
            <tr>
                <td>Product id</td>
                <td>
                    <select name="pd_id" id="pd_id">
                        <option value="">--Select--</option>
                        <?php
                        include_once("../db_connection.php");
                        $sql1=$conn->prepare("SELECT *FROM product_details");
                        
                        $sql1->execute();
                        $result1=$sql1->get_result();
                        while($row1=$result1->fetch_assoc())
                        {
                            ?>
                            <option value="<?php echo $row1['pd_id'];?> "
                            <?php
                            if($row['pd_id']==$row1['pd_id']){
                                ?>
                                Selected
                                <?php
                            }
                            ?>
                            
                            
                            
                            
                            >
                            <?php echo $row1['pd_name'];?>   
                                
                            </option>
                            <?php
                        }
                        ?>
                        
                        
                        ?>
                                                
                                                                                                
                    </select>
                    
                    
                    
                    
                    
                </td>
                
            </tr>
            
            <tr>
            <td>stock avail qty</td>
            <td><input type="text" name="sd_avail_qty" id="sd_avail_qty" value="<?php echo $row['sd_avail_qty'];?>"></td>
             </tr>   
            
            
            <tr>
                <td>Min order qty</td>
                <td><input type="text" name="sd_min_order_qty" id="sd_min_order_qty" value="<?php echo $row['sd_min_order_qty'];?>"></td>
            </tr>
            
            
                <tr>
                <td>MRP</td>
                <td><input type="text" name="sd_mrp" id="sd_mrp" value="<?php echo $row['sd_mrp'];?>"></td>
            </tr>
            
            
            <tr>
                <td>Packet Rate</td>
                <td><input type="text" name="sd_ptr" id="sd_ptr" value="<?php echo $row['sd_ptr'];?>"></td>
            </tr>
            
            
           
            
            <tr>
                <td>Packet Rate discount</td>
                <td><input type="text" name="sd_ptr_discount" id="sd_ptr_discount" value="<?php echo $row['sd_ptr_discount'];?>"></td>
            </tr>
            
            <tr>
                <td>Scheme unit price</td>
                <td><input type="text" name="sd_scheme_unit_price" id="sd_ptr_discount" value="<?php echo $row['sd_ptr_discount'];?>"></td>
            </tr>
                  
                <tr>
                <td>Total amount</td>
                <td><input type="text" name="sd_total_amount" id="sd_total_amount" value="<?php echo $row['sd_total_amount'];?>"></td>
            </tr>               
                 
            <tr>
                <td>Net Profit</td>
                <td><input type="text" name="sd_net_profit" id="sd_net_profit" value="<?php echo $row['sd_net_profit'];?>"></td>
            </tr>                               
                                                                                
                 <tr>
                <td>Status</td>
                <td><input type="text" name="sd_status" id="sd_status" value="<?php echo $row['sd_status'];?>"></td>
            </tr>                                                                                                                   <tr>
                <td>Scheme Status</td>
                <td><input type="text" name="sd_scheme_status" id="sd_scheme_status" value="<?php echo $row['sd_scheme_status'];?>"></td>
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