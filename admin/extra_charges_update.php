<?php
    require("../db_connection.php");
    $ec_id=$_POST["ec_id"];
    $ec_min_amount=$_POST["ec_min_amount"];
    $ec_min_stock_qty=$_POST["ec_min_stock_qty"];
    $ec_date=$_POST["ec_date"];
   
    $sql=$conn->prepare("UPDATE extra_charges SET ec_min_amount=?,ec_min_stock_qty=?,ec_date=? WHERE ec_id=?");
    
    $sql->bind_param("iisi",$ec_min_amount,$ec_min_stock_qty,$ec_date,$ec_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD UPDATED');
        window.location='extra_charges_view.php';
        </script>";
    }
    else
    {
          echo "<script type='text/javascript'>
        alert('RECORD NOT UPDATED');
        window.location='extra_charges_view.php';
        </script>";
    }              
?>
