<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "mechanic_list";

    $mconn = mysqli_connect($servername,$username,$password,$dbname);

    if($mconn)
    {
        //echo "Connection ok";
    }
    else
    {
        echo "Connection failed";
    }
?>