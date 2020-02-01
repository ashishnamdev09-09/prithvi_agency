<?php
    require("../db_connection.php");
    $mc_id=$_POST["mc_id"];
    $mc_name=$_POST["mc_name"];
    $mc_date=$_POST["mc_date"];
   
    $sql=$conn->prepare("UPDATE main_category SET mc_name=?,mc_date=? WHERE mc_id=?");
    
    $sql->bind_param("ssi",$mc_name,$mc_date,$mc_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD UPDATED');
        window.location='main_category_view.php';
        </script>";
    }
    else
    {
          echo "<script type='text/javascript'>
        alert('RECORD NOT UPDATED');
        window.location='main_category_view.php';
        </script>";
    }              
?>
