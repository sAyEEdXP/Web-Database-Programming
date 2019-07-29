<?php
include('config.php');
    $name=$email=$role=$password ="";
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $adddata = "INSERT INTO users (name, email, password, role) 
        VALUES('$name', '$email', '$password', '$role')";
    $res = mysqli_query($myconn, $adddata);
    if($res==true){
        echo "<script>window.alert('Data updated');</script>";
        header("location:../index.php");
    } else {
        echo "<h3>Data is not added</h3>";
    }
?>