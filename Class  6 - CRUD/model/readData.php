<?php
include('config.php');
$userList = "SELECT * FROM stdinfo";
$res = mysqli_query($myconn, $userList);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        $id = $row['id'];
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td><a href='../view/editData.php?id=$id'> Edit</a> | <a href='../model/deleteData.php?eid=$id' onclick='return confirm()'> Delete</a></td></tr>";
    }
}
?>