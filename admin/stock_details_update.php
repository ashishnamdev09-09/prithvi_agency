<?php
    require("../db_connection.php");
    $sd_id=$_POST["sd_id"];
    $pd_id=$_POST["pd_id"];
    $sd_avail_qty=$_POST["sd_avail_qty"];
    $sd_min_order_qty=$_POST["sd_min_order_qty"];
    $sd_mrp=$_POST["sd_mrp"];
    $sd_ptr=$_POST["sd_ptr"];
    $sd_ptr_discount=$_POST["sd_ptr_discount"];
    $sd_scheme_unit_price=$_POST["sd_scheme_unit_price"];
    $sd_total_amount=$_POST["sd_total_amount"];
    $sd_net_profit=$_POST["sd_net_profit"];
    $sd_status=$_POST["sd_status"];
    $sd_scheme_status=$_POST["sd_scheme_status"];

    $sql=$conn->prepare("UPDATE stock_details SET pd_id=?,sd_avail_qty=?,sd_min_order_qty=?,sd_mrp=?,sd_ptr=?,sd_ptr_discount=?,sd_scheme_unit_price=?,sd_total_amount=?,
    sd_net_profit=?,sd_status=?,sd_scheme_status=? WHERE sd_id=?");
    
    $sql->bind_param("iiiddidddssi",$pd_id, $sd_avail_qty,$sd_min_order_qty,$sd_mrp,$sd_ptr, $sd_ptr_discount,$sd_scheme_unit_price,$sd_total_amount,$sd_net_profit,$sd_status,$sd_scheme_status,$sd_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD UPDATED');
        window.location='stock_details_view.php';
        </script>";
    }
    else
    {
          echo "<script type='text/javascript'>
        alert('RECORD NOT UPDATED');
        window.location='stock_details_view.php';
        </script>";
    }  
    
                
?>
