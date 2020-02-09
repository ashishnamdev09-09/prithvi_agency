<?php 
    require("../db_connection.php");
        $ad_username=$_POST["ad_username"];
        $ad_password=$_POST["ad_password"];
    #prepare is used to repeat sql statment repeatedly
    $sql=$conn->prepare("SELECT* FROM admin WHERE ad_username=?");
    #its is used to get bind the param with the variable names
    $sql->bind_param("s",$ad_username);
    $sql->execute();
            #it returns the result of the sql query.
    $result=$sql->get_result();
#it will check how many rows are present in the result set 
    $count=$result->num_rows;
        
        if($count==1)
        {
            
            $row=$result->fetch_assoc();
            if($ad_password==$row["ad_password"])
            {
                header("Location:../admin/");
            }
            
            else
            {
                echo"<script type='text/javascript'>
                alert('INVALID USERNAME AND PASSWORD');
                window.location='index.php';
                </script>";
                
            } 
        }
                else
                {
                    echo"<script type='text/javascript'>
                    alert('INVAILD USERNAME AND PASSWORD');
                    window.location='index.php';
                    </script>";
                    }
?>