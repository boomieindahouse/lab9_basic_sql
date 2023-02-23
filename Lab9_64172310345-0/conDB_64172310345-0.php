<?php
    $server_name = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "myworkweb";

    // create connection
    $conn = mysqli_connect($server_name,$db_username, $db_password,$db_name);
    // check connection
    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }else{
        //echo "Connection successfully";
    }
?>