<?php
include('config.php');
    $eid = $_GET['eid'];

    $sq = "delete from stdinfo where '$eid'";
    $res = mysqli_query($myconn, $sq);
    if($res==true){
        
        header("location:../view/userData.php");
        
    } else {
        echo "<script>window.alert('Data updated');</script>";
    }
?>