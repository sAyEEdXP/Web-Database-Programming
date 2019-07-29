<?php
include('config.php');
    $name=$email="";
    $name = $_POST['name'];
    $email = $_POST['email']; 

    $adddata = "INSERT INTO stdinfo(name, email) 
        VALUES('$name', '$email')";
    $res = mysqli_query($myconn, $adddata);
    if($res==true){
        echo "<script>window.alert('Data updated');</script>";
        header("location:../view/userData.php");
    } else {
        echo "<h3>Data is not added</h3>";
    }
?>