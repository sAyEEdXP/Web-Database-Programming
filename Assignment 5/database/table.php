<?php
include("config.php");
//patient table 
$tbl_patient="CREATE TABLE IF NOT EXISTS patient(
p_id INT(11) NOT NULL,
PRIMARY KEY(p_id),
name VARCHAR(50) NOT NULL,
email VARCHAR(50)NOT NULL)";
$patient=mysqli_query($myconn,$tbl_patient);
if($patient===TRUE)
{
	echo"<br>patient table reated happy codding (:";
}
else
{
		echo"<br>patient table not reate ):";

}
// Doctor Table


?>