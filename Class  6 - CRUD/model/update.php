<?php
include('config.php');
    $eid = $_POST['eid'];
    $id=$_POST["id"];
    $name = $_POST['name'];
    $email = $_POST['email'];  

    $sq = "update stdinfo set id='$id', name='$name', email='$email' where '$eid'";
    $res = mysqli_query($myconn, $sq);
    if($res==true){
        
        header("location:../view/userData.php");
        
    } else {
        echo "<script>window.alert('Data updated');</script>";
    }
?>