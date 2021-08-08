<?php 
include("connection.php");
$aa=$_GET['id'];
$r=mysqli_query($con,"select * from stdreglog where id='$aa'");
$result=mysqli_fetch_array($r);
if(isset($_POST['reg'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$contact=$_POST['contact'];
	$mail=$_POST['mail'];
	$gen=$_POST['gen'];
	$cho=$_POST['lan'];
	$lan=implode(',',$cho);
	$address=$_POST['address'];//here wont give[]this braket
	$city=$_POST['city'];
	$course=$_POST['course'];
	$branch=$_POST['branch'];
	$yop=$_POST['yop'];
	$file=$_POST['fhdname'];
	$path=$_POST['fhdpath'];
	if($_FILES['fimg']['error']==0)
	{
	$file=$_FILES['fimg']['name'];
	$tmpfile=$_FILES['fimg']['tmp_name'];
	$path='img/'.$file;
	move_uploaded_file($tmpfile,$path);
}
	$uname=$_POST['uname'];
	$upass=$_POST['upass'];
	$cpass=$_POST['cpass'];
$r=mysqli_query($con,"UPDATE stdreglog set FIRSTNAME='$fname',LASTNAME='$lname',D_O_B='$dob',PHONE=,'$contact',EMAIL='$mail',GENDER='$gen',LANGUAGE='$lan',ADDRESS='$address',CITY='$city',EDUCATION='$course',BRANCH='$branch',PASSEDOUT='$yop',img_name='$file',img_path='$path',USERNAME='$uname',PASSWORD='$upass',CONFPASS='$cpass')");
if($r>'0'){
	echo "your registration hasbeen successfull..!";
}
else
{
	echo "registraion failled..!";
}
}
?>

<form method="post" enctype="multipart/form-data">
<fieldset style="width:auto;height:700px">
<table>


<tr>
<td><label>FIRST NAME:</label></td>
<td><input type="text" name="fname" style="text-transform:uppercase;" placeholder="Enter your name" maxlength="10" autofocus="true" value="<?php echo $result['FIRSTNAME'];?>" required/>
</td>
<td><br></td>
</tr>
<tr>
<td><label for="lname">LAST NAME:</label></td>
<td><input type="text" name="lname" style="text-transform:uppercase" placeholder="Enter your name" maxlength="10" id="lname" autofocus="true"  value="<?php echo $result['LASTNAME'];?>"> 
</td>
<td><br></td>
</tr>
<tr>
<td><label for="dob">DATE OF BIRTH:</label></td>
<td><input type="date" name="dob" placeholder="Enter your dob" id="dob" value="<?php echo $result['D_O_B'];?>" required></td>
<td><br></td>
</tr>
<tr>
<td><label for="contact">PHONE:</label></td>
<td><input type="phone" name="contact" placeholder="Enter your num" maxlength="10" id="contact" value="<?php echo $result['PHONE'];?>"required/>
<td><br></td>
</td>
</tr>
<tr>
<td><label for="mail">EMAIL</label></td>
<td><input type="mail" name="mail" placeholder="Enter your email"  id="mail" value="<?php echo $result['EMAIL'];?>" required></td>
<td><br></td>
</tr>
<tr>
<td><label for="gen">GENDER:</label></td>
<td><input type="radio" name="gen" id="gen" value="MALE" <?php if($result['GENDER']=='MALE'){
	echo 'checked';
}?>>MALE
<input type="radio" name="gen" value="FEMALE" <?php if($result['GENDER']=='FEMALE'){
	echo 'checked';
}?>>FEMALE
<input type="radio" name="gen" value="OTHERS" <?php if($result['GENDER']=='OTHERS'){
	echo 'checked';
}?>>OTHERS</td>
<td><br></td>
</tr>
<tr>
	<?php
$ss=$result['LANGUAGE'];
$rr=explode(',',$ss );
?>
<td><label>LANGUAGES:</label></td>
<td><input type="checkbox" name="lan[]" value="Telugu" <?php if(in_array('Telugu',$rr)){
	echo "checked";
}?>>Telugu<br>
<input type="checkbox" name="lan[]" value="Hindi" <?php if(in_array('Hindi',$rr)){
	echo "checked";
}?>>Hindi<br>
<input type="checkbox" name="lan[]" value="English" <?php if(in_array('English',$rr)){
	echo "checked";
}?>>English
</td>
<td><br></td>
</tr>
<tr>
<td><label for="add">ADDRESS:</label></td>
<td>
<textarea cols="20" rows="5" id="add" name="address" value="<?php echo $result['ADDRESS'];?>"></textarea>
</td>
</tr>
<tr>
<td><label for="city">CITY:</label></td>

<td>
<select name="city" id="city">
<option selected disabled hidden>---select---</option>
<option value="Hyderabad"  <?php if ($result['CITY']=='Hyderabad')
{
	echo"selected";
}?>>Hyderabad</option>
<option value="Warangal" <?php if ($result['CITY']=='Warangal')
{
	echo"selected";
}?>>Warangal</option>
<option value="Karimnagar" <?php if ($result['CITY']=='Karimnagar')
{
	echo"selected";
}?>>Karimnagar</option>
<option value="Kammam"  <?php if ($result['CITY']=='Kammam')
{
	echo"selected";
}?>>Kammam</option>
</select>
</td>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td colspan=2 style="color:red;font-size: 20px;">-::ADD EDUCATIONAL DETAILS::-</td>
</tr>
<tr>
<td><br></td>
</tr>

<tr>
<td><label for="course">EDUCATION:</label></td>
<td>
<select name="course" id="course">
<option label="select" selected disabled hidden>-To..choose-</option>
<option value="DEGREE" <?php if ($result['EDUCATION']=='DEGREE')
{
	echo"selected";
}?>
>DEGREE</option>
<optgroup label="BTECH"<?php if ($result['EDUCATION']=='BTECH')
{
	echo"selected";
}?>>BTECH
<option value="EEE" <?php if ($result['EDUCATION']=='EEE')
{
	echo"selected";
}?>>EEE</option>
<option value="CSE" <?php if ($result['EDUCATION']=='CSE')
{
	echo"selected";
}?>>CSE</option>
<option value="MECH" <?php if ($result['EDUCATION']=='MECH')
{
	echo"selected";
}?>>MECH</option>
</optgroup>
<option value="MCA" <?php if ($result['EDUCATION']=='MCA')
{
	echo"selected";
}?>>MCA</option>
<option value="MSC" <?php if ($result['EDUCATION']=='MSC')
{
	echo"selected";
}?>
>MSC</option>
<option value="MBA" <?php if ($result['EDUCATION']=='MBA')
{
	echo"selected";
}?>>MBA</option>
</select>
</td>
<td><br></td>
</tr>
<tr>
	<td><label>BRANCH:</label></td>
	<td>
		<select name="branch">
			<option label="select" selected disabled hidden>-To..choose-</option>
			<option value="COMPUTERS"<?php if($result['BRANCH']=='COMPUTERS')
			{
				echo "selected";
			}?>>COMPUTERS
				
			</option>
			<option value="IT"<?php if($result['BRANCH']=='IT')
			{
				echo "selected";
			}?>>IT
				
			</option>
			<option value="CIVIL"<?php if($result['BRANCH']=='CIVIL')
			{
				echo "selected";
			}?>>CIVIL
				
			</option>
			<option value="ECE"<?php if($result['BRANCH']=='ECE')
			{
				echo "selected";
			}?>>ECE
				
			</option>
			<option value="MECHANICAL"<?php if($result['BRANCH']=='MECHANICAL')
			{
				echo "selected";
			}?>>MECHANICAL
				
			</option>
			<option value="ELECTRONICS"<?php if($result['BRANCH']=='ELECTRONICS')
			{
				echo "selected";
			}?>>ELECTRONICS
				
			</option>
		</select>
	</td>
	<td><br></td>
</tr>




<tr>
<td><label for="year">PASSEDOUT:</label></td>
<td><input type="month" name="yop" value="<?php echo $result['PASSEDOUT'];?>" required></td>
</tr>
<tr>
<td><label>UPLOAD FILE:</label></td>
<td><input type="file" name="fimg" ></td>
<td>
<img width="50px" src="<?php echo $result['img_path']?>">
<input type="hidden" name="fhdname" value="<?php echo $result['img_name']?>">
<input type="hidden" name="fhdpath" value="<?php echo $result['img_path']?>">
</td>
</tr>
<tr>
<td><br></td>
</tr>

<tr>
<td><label for="uname">USERNAME:</label></td>
<td><input type="text" name="uname" style="text-transform:uppercase;" placeholder="Enter your name" maxlength="10" value="<?php echo $result['USERNAME'];?>" id="uname" required/>
</td>
</tr>
<tr>
<td><label for="upass">PASSWORD:</label></td>
<td><input type="password" name="upass"  placeholder="Enter your pwd" id="upass" value="<?php echo $result['PASSWORD'];?>" required/>
</td>
</tr>
<tr>
<td><label for="cnpwd">CONFPASS:</label></td>
<td><input type="password" name="cpass"  placeholder="confirm pwd" id="cpass" value="<?php echo $result['CONFPASS'];?>" required/>
</td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td>
<input type="Submit" name="reg" value="SUBMIT"></td>
<td><input type="Reset" name="clr" value="RESET">
</td>
</tr>
</table>
</fieldset>
</form>