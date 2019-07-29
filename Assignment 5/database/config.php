<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="demo";
$myconn=mysqli_connect("$db_host","$db_user","$db_pass","$db_name");
if(mysqli_connect_error())
{
		echo mysqli_connect_error();
	}
else
{
	echo"<h1>connection successfull";

}
?>