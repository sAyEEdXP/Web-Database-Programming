<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $db_host = "localhost";
        $db_username = "root";
        $db_pass = "";

        $db_name = "demo";

        $mycon = mysqli_connect($db_host, $db_username, $db_pass);
//        if($myconn->connect_error){
//            echo "Connection failed";
//        }
//        else {
//            echo "Connection succesfull";
//        }

        $sql = "create database ".$db_name;
        $res = mysqli_query($mycon, $sql);

//        if($res == true){
//            echo "demo data database created";
//        }
//        else {
//            echo "db creation failed";
//        }
    ?>
</body>
</html>