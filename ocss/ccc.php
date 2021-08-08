<?php
session_start();
include("connection.php");
if(isset($_POST['Submit']))
{
 $oldpass=$_POST['opwd'];
 $newpassword=$_POST['npwd'];
$sql=mysqli_query($con,"SELECT PASSWORD FROM stdreglog where PASSWORD='$oldpass' ");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update stdreglog set PASSWORD='$newpassword' where EMAIL='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<form name="chngpwd" action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td>Old Password :</td>
<td><input type="password" name="opwd" id="opwd"></td>
</tr>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="npwd" id="npwd"></td>
</tr>
<tr height="50">
<td>Confirm Password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<tr>
<td><a href="index.php">Back to login Page</a></td>
<td><input type="submit" name="Submit" value="Change Passowrd" /></td>
</tr>
 </table>
</form>