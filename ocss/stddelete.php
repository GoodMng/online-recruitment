<?php
include("connection.php");
 $aa=$_GET['id'];
$r=mysqli_query($con,"DELETE FROM `stdreglog` WHERE id='$aa'") or mysqli_error();
if($r>'0')
{
	echo "record deleted";
	header("refresh:2;url='fetch.php'");
}
else
{
	echo "record not deleted";
}
?>