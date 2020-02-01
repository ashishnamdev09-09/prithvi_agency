<?php
    require("../db_connection.php");
    $pd_id=$_POST["pd_id"];
    $pc_id=$_POST["pc_id"];
    $pd_name=$_POST["pd_name"];
    $pd_sku_code=$_POST["pd_sku_code"];
    $pd_tax_percent=$_POST["pd_tax_percent"];
    $pd_image=$_POST["pd_image"];
    $pd_description=$_POST["pd_image"];
    $pd_date=$_POST["pd_date"];

    $sql=$conn->prepare("UPDATE product_details SET pc_id=?,pd_name=?,pd_sku_code=?,pd_tax_percent=?,pd_image=?,pd_image=?,pd_date=? WHERE pd_id=?");
    
    $sql->bind_param("ississsi",$pc_id,$pd_name,$pd_sku_code,$pd_tax_percent,$pd_image, $pd_description,$pd_date,$pd_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD UPDATED');
        window.location='product_details_view.php';
        </script>";
    }
    else
    {
          echo "<script type='text/javascript'>
        alert('RECORD NOT UPDATED');
        window.location='product_details_view.php';
        </script>";
    }  
    
                
?>
