<?php
include('config.php');
    
    session_start();
    $email=$role=$password ="";

    $email = $_POST['email']; 
    $password = ($_POST['password']);
    $role = $_POST['role'];


    $sql = "select * from users where email='$email' AND password='$password' AND role='$role'";
    $res = mysqli_query($myconn, $sql);
    $count = mysqli_num_rows($res);
    if($count==1){
        $_SESSION['email'] = $email;
        header("location:../index.php");
    } else {
        echo "Email or Password is wrong!";
        header("location: ../view/signup.php");
    }
?>