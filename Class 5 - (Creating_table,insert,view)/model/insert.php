<?php
include('config.php');
    $name=$email=$gender=$birthday=$nationality="";
    $name = $_POST['name'];
    $email = $_POST['email'];    
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $nationality = $_POST['nationality'];

    $adddata = "INSERT INTO patient(name, email, gender, birthday, nationality) 
        VALUES('$name', '$email', '$gender', '$birthday','$nationality')";
    $res = mysqli_query($myconn, $adddata);
    if($res==true){
        echo "<h3>Data added successfully</h3>";
    } else {
        echo "<h3>Data is not added</h3>";
    }
?>