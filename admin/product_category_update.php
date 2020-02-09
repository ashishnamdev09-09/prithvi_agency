<?php
    require("../db_connection.php");
    $pc_id=$_POST["pc_id"];
    $mc_id=$_POST["mc_id"];
    $pc_name=$_POST["pc_name"];
   
    $sql=$conn->prepare("UPDATE product_category SET mc_id=?,pc_name=? WHERE pc_id=?");
    
    $sql->bind_param("iis",$mc_id,$pc_name,$pc_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD UPDATED');
        window.location='product_category_view.php';
        </script>";
    }
    else
    {
          echo "not";
    }              
?>
