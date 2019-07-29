<?php
include('config.php');
    $productName=$price=$details=$filetemp=$filename=$filetype=$filepath="";

    $productName = $_POST['productName']; 
    $price = $_POST['productPrice']; 
    $details = $_POST['productDetails']; 
    $filetemp = $_FILES['productImage']['tmp_name'];
    $filename = $_FILES['productImage']['name'];
    $filetype = $_FILES['productImage']['type'];
    $filepath = "img/".$filename;
//    echo "$productName $price $details $filename $filepath";

    $adddata = "INSERT INTO products (productName, price, details, filetemp, filename, filetype, filepath) 
        VALUES('$productName', '$price', '$details', '$filetemp', '$filename', '$filetype', '$filepath')";
    $res = mysqli_query($myconn, $adddata);
    if($res==true){
        move_uploaded_file($filetemp, "../".$filepath);
        echo "<script>window.alert('Data updated');</script>";
        header("location:../view/productlist.php");
    } else {
        echo "<h3>Data is not added</h3>";
    }
?>