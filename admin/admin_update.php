<?php
    require("../db_connection.php");
    $ad_id=$_POST["ad_id"];
    $ad_name=$_POST["ad_name"];
    $ad_contact=$_POST["ad_contact"];
    $ad_address=$_POST["ad_address"];
    $ad_email=$_POST["ad_email"];
    $ad_username=$_POST["ad_username"];
    $ad_password=$_POST["ad_password"];
    $ad_date=$_POST["ad_date"];

    $sql=$conn->prepare("UPDATE admin SET ad_name=?,ad_contact=?,ad_address=?,ad_email=?,ad_username=?,ad_password=?,ad_date=? WHERE ad_id=?");
    
    $sql->bind_param("sisssssi",$ad_name,$ad_contact,$ad_address,$ad_email,$ad_username, $ad_password,$ad_date,$ad_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD UPDATED');
        window.location='admin_view.php';
        </script>";
    }
    else
    {
          echo "<script type='text/javascript'>
        alert('RECORD NOT UPDATED');
        window.location='admin_view.php';
        </script>";
    }  
    
                
?>
