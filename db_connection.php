<?php
$servername="localhost";
$username="root";
$password="";
$db_name="prithvi_agency";

$conn=new mysqli($servername,$username,$password,$db_name);
if($conn->connect_errno)
     { 
    echo "connection failed";die;
    
        }



?>
