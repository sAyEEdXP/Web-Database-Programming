<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$myconn=mysqli_connect("$db_host","$db_user","$db_pass");
$sql="CREATE DATABASE demo";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
		echo"data base created";
}

else
{
	echo mysqli_connect_error();
}

?>