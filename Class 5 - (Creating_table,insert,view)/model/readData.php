<?php
include('config.php');
$userList = "SELECT * FROM patient";
$res = mysqli_query($myconn, $userList);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>".$row['birthday']."</td><td>".$row['nationality']."</td><td></tr>";
    }
}
?>