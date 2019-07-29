<?php
    $db_host = "localhost";
    $db_username = "root";
    $db_pass = "";
    $db_name = "demo";

    $mycon = mysqli_connect($db_host, $db_username, $db_pass);  
    
    $sql = "create database ".$db_name;
    $res = mysqli_query($mycon, $sql);
    $myconn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);
    
?>