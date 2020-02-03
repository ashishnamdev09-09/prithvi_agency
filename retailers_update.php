<?php
    require("../db_connection.php");
    $rt_id=$_POST["rt_id"];
    $rt_enterprise_name=$_POST["rt_enterprise_name"];
    $rt_name=$_POST["rt_name"];
    $rt_contact=$_POST["rt_contact"];
    $rt_email=$_POST["rt_email"];
    $rt_address=$_POST["rt_address"];
    $rt_username=$_POST["rt_username"];
    $rt_password=$_POST["rt_password"];
    $rt_date=$_POST["rt_date"];

    $sql=$conn->prepare("UPDATE retailers SET rt_enterprise_name=?,rt_name=?,rt_contact=?,rt_email=?,rt_address=?,rt_username=?,rt_password=?,rt_date=? WHERE rt_id=?");
    
    $sql->bind_param("ssisssssi",$rt_enterprise_name, $rt_name,$rt_contact,$rt_email,$rt_address,$rt_username,$rt_password,$rt_date,$rt_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD UPDATED');
        window.location='retailers_view.php';
        </script>";
    }
    else
    {
          echo "<script type='text/javascript'>
        alert('RECORD NOT UPDATED');
        window.location='retailers_view.php';
        </script>";
    }  
    
                
?>
