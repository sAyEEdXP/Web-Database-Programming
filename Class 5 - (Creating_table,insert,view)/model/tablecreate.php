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
        $myconn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);
        $sql = "create table if not exists  patient (id INT(6)NOT NULL AUTO_INCREMENT primary key, name VARCHAR(25) NOT NULL, email VARCHAR(30) NOT NULL, gender VARCHAR(10) NOT NULL, birthday VARCHAR(15) NOT NULL, nationality VARCHAR(15) NOT NULL)";
        $res = mysqli_query($myconn, $sql);

//        if($res == true){
//            echo "TABLE created";
//        }
//        else {
//            echo "table creation failed";
//        }
    ?>
</body>
</html>