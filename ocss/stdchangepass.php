<?php
ob_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width,intial-scale=1.0">
<style type="text/css">
*{
box-sizing:border-box;
padding:0px;
margin:0px;
}
header
{
border:0px solid black;
width:100%;
height:auto;
background-color:lightgreen;
text-align:center;
padding:30px;
}
.logo
{
width:10%;
height:70px;
margin-top:3px;
float:left;
}
 header h1
{
font-size:50px;
position:center;
text-shadow:2px 2px 10px;
}
 h1 span
{
color:red;
}
nav
{
border:1px solid black;
width:100%;
height:auto;
font-size:35px;
background-color:green;
position:sticky;
top:0px;
}
nav ul
{
list-style-type:none;
display:inline;
}
nav li
{
border:0px solid black;
display:inline-block;
width:200px;
height:auto;
color:black;
font-size:25px;
padding-bottom:10px;
text-align:center;
}
nav li a
{
text-decoration:none;
color:white;
display:block;
border-radius:20px;
border-bottom:3px solid tomato;
}

nav ul li a:hover
{ 
background-color:orange;
color:black;
}
main
{
border:0px solid black;
width:100%;
height:800px;
}
h2
{
text-align:center;
background-color:lightgreen;
}
.b label,.c label,.a22 label,.r1,.r2,.b1 label
{
font-size:20px;
}
.a22 .but1,.but11,.c22 .but3,.but31
{
font-size:15px;
background-color:green;
color:white;
}
.s1
{
border:0px solid;
width:100%;
height:200px;
}
.a
{
border:1px solid black;
background-color:;
width:25%;
height:250px;
float:left;
}
.b
{
border:1px solid black;
background-color:;
width:50%;
height:250px;
float:left;
text-align:center;
border-bottom-left-radius:10px;
border-bottom-right-radius:10px;
}

.b11
{
border:0px solid lightgreen;
width:100%;
height:250px
background-color:lightgreen;
text-align:center;
font-size:25px;
border-radius:10px;
}
.b22 .but2,.but21
{
width:100px;
height:30px;
background-color:green;
color:white;
font-size:15px;
}
.c
{
border:1px solid black;
background-color:;
width:25%;
height:250px;
float:left;
}
.a33,.c33
{
float:right;
color:lightgreen;
font-weight:bold;
line-height:30px;

}
.a33 li
{
list-style-type:none;
}
.s2
{
border:0px solid red;
width:100%;
height:600px;
}
.a1
{
border:1px solid black;
background-color:;
width:25%;
height:300px;
float:left;
text-align: -webkit-center;
}
.ls2 ul
{
list-style-type:none;
line-height:30px;
}
.ls2 ul li
{
border:1px solid blue;
display:block;
width:200px;
height:auto;
text-align:center;
background-color:lightgreen;
border-radius:10px;
}
.ls2 ul li a
{
color:green;
font-weight:bold;
font-size:20px;
text-decoration:none;
}
.ls2 ul li:hover
{
border-left:5px solid black;
border-right:5px solid black;
}
.b1
{
border:1px solid black;
background:url("img/pic4.png");
background-size:cover;
width:50%;
height:700px;
float:left;
}
.b1 h1
{
color:red;
background-color:aqua;
}
.but3
{
background-color:green;
width:80px;
height:30px;
color:white;
}
.c1
{
border:1px solid black;
width:25%;
height:300px;
float:left;
}
.rs2 ul
{
list-style-type:none;
line-height:30px;
padding:0px;

}
.rs2 ul li a
{
color:green;
font-weight:bold;
font-size:20px;
}
footer
{
border:0px solid red;
width:100%;
height:auto;
background-color:lightgreen;
text-align:center;
font-size:20px;
padding-top:20px;
float:left;
}
@media screen and (max-width:992px)
{
header
{
width:100%;
padding:30px;
}
.logo
{
width:8%;
height:60px;
margin-top:3px;
float:left;
}

nav
{
width:100%;
}
nav li
{
width:100%;
}
main
{
width:100%;
}
.s1
{
width:100%;
}
.s2
{
width:100%;
}
.a
{
width:100%;
float:left;
}
.b
{
width:100%;
float:left;
}
.b11
{
width:100%;
height:auto;
}
.c
{
width:100%;
float:left;
}
.a1
{
width:100%;

}
.b1
{
width:100%;
float:left;
}
.c1
{
width:100%;
float:left;
}
.rs2 ul
{
line-height:30px;
padding:30px;
}
.rs2 ul li a
{
color:green;
font-weight:bold;
font-size:20px;
}
footer
{
width:100%;
}
}
@media screen and (max-width:768px)
{
header
{
width:100%;
padding:20px;
}
.logo
{
width:10%;
height:60px;
margin-top:3px;
float:left;
}

nav
{
width:100%;
}
ul
{
list-style-type:none;
display:inline;
text-align:center;
}
li
{
display:inline-block;
width:100%;
}
main
{
width:100%;
}
.s1
{
width:100%;
}
.s2
{
width:100%;
}
.a
{
width:100%;
float:left;
}
.b
{
width:100%;
float:left;
}
.b11
{
width:100%;
height:auto;
}
.c
{
width:100%;
float:left;
}
.a1
{
width:100%;
float:left;
}
.b1
{
width:100%;
float:left;
}
.c1
{
width:100%;
float:left;
}
.rs2 ul
{
line-height:30px;
}
.rs2 ul li a
{
color:green;
font-weight:bold;
font-size:20px;
}
footer
{
width:100%;
}
}
@media screen and (max-width:576px)
{
header
{
width:100%;
padding:20px;
}
.logo
{
width:12%;
height:60px;
margin-top:3px;
float:left;
}

nav
{
width:100%;
}
ul
{
list-style-type:none;
display:inline;
text-align:center;
}
li
{
display:inline-block;
width:50%;
}
main
{
width:100%;
}
.s1
{
width:100%;
}
.s2
{
width:100%;
}
.a
{
width:100%;
float:left;
}
.b
{
width:100%;
float:left;
}
.b11
{
width:100%;
height:auto;
}
.c
{
width:100%;
float:left;
}
.a1
{
width:100%;
float:left;
}
.b1
{
width:100%;
float:left;
}
.c1
{
width:100%;
float:left;
}
.rs2 ul
{
line-height:30px;

}
.rs2 ul li a
{
color:green;
font-weight:bold;
font-size:20px;
}
footer
{
width:100%;
}
}
</style>
</head>
<body>
<header>
<img src="img\logo.png"  class="logo">
<h1><span>O</span>NLINE <span>C</span>AMPUS <span>R</span>ECRUITMENT <span>S</span>YSTEM</h1>
</header>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="nsr.php"class="active">Student details</a></li>
<li><a href="#">Collage Info</a></li>
<li><a href="#">About Us</a></li>
<li><a href="contactus.php">Contact Us</a></li>
</ul>
</nav>
<main>
<div class="s1">
<div class="a">
<div class="a11">
<h2>Job Seekers Login Area</h2>
</div>
<div class="a22">
<form action="" method="get" target="">
<table style="line-height:2">
<tr>
<td><label for="u1">UserName:</label></td>
<td><input type="text" name="username"  placeholder="Enter Your Name" id="u1" size="15">
</tr>

<tr>
<td><label for="u2">Password:</label></td>
<td><input type="password"  name="password"  placeholder="Enter Your password" id="u2" size="15"</td>
</tr>
</table>
<br>
<input type="submit" value="Login" class="but1">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Cancel" class="but11">
</form>
<br>
<div class="a33">
<ul>
<li><a href="nsr.php">NewStudent ?</a></li>
<li><a href="stdfpass.php">ForgotPassword ?</a></li>
</ul>
</div>
</div>
</div>


<div class="b">
<div class="b11">
<h2>--:::::Advance Search zone:::::--</h2>
</div>
<div class="b22">
<form method="post">
<label>Category:</label>
<select>
<option selected disabled>----To Choose Here----</option>
<option>SC</option>
<option>ST</option>
<option>BC(com)</option>
<option>MINORITY</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Qualification:</label>
<select>
<option selected disabled>----To Choose Here----</option>
<option>MCA</option>
<option>MBA</option>
<option>BSC(com)</option>
<option>MSC</option>
</select><br><br><br>
<label>Skills:</label>
<select>
<option selected disabled>----To Choose Here----</option>
<option>Html</option>
<option>Css</option>
<option>javascript(com)</option>
<option>php</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio"  name="xx" class="r1"><label for="r1"> Student</label> &nbsp;&nbsp;&nbsp;
<input type="radio" name="xx" class="r2"> <label for="r2">Company</label>

<br><br>
<input type="submit" value="submit" class="but2">&nbsp;&nbsp;&nbsp;
<input type="reset" value="Cancel" class="but21">
</form>
</div>
</div>

<div class="c">
<div class="c11">
<h2>Recruiter Login Area</h2>
</div>

<div class="c22">
<form action="" method="get" target="">
<table style="line-height:2;">
<tr>
<td><label for="u11">UserName:</label></td>
<td><input type="text" name="username"  placeholder="Enter Your Name" id="u11" size="15"</td>
</tr>

<tr>
<td><label for="u22">Password:</label></td>
<td><input type="password"  name="password"  placeholder="Enter Your password" id="u22" size="15"</td>
</tr>
</table>
<br>
<input type="submit" value="Login" class="but3">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Cancel" class="but31">
</form>
<br>
<div class="c33">
<a href="#">NewCompany ?</a><br>
<a href="#">ForgotPassword ?</a>
</div>
</div>
</div>

</div>


<div class="s2">

<div class="a1">
<div class="ls1">
<h2>Find Job By Category</h2>
</div>
<br>

<div class="ls2">

<ul>
<li><a href="#">Computer</a></li>
<li><a href="#">IT</a></li>
<li><a href="#">Mechanical</a></li>
<li><a href="#">EC</a></li>
<li><a href="#">AutoCad</a></li>
<li><a href="#">Civil</a></li>
<li><a href="#">Electrical</a></li>
</ul>
</div>
</div>
<div class="b1">
<h1 align="center">::STUDENT CHANGE PASSWORD::</h1>
<div class="b12">
<br>
<?php
session_start();
include("connection.php");
if(isset($_POST['sub']))
{
 $oldpass=md5($_POST['opass']);
 $email=$_SESSION['ee'];
 $newpassword=md5($_POST['npass']);
$sql=mysqli_query($con,"SELECT password FROM stdreglog where EMAIL='$email'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update stdreglog set PASSWORD='$newpassword' where EMAIL='$email'");
echo "Password Changed Successfully !!";
}
else
{
echo "Old Password not match !!";
}
}
?>

<!--<?php 
echo $id=$_GET['id'];
 include("connection.php");
$r=mysqli_query($con,"select * from stdreglog where id='$id'");
$result=mysqli_fetch_array($r);
if(isset($_POST['sub'])){
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
$rr=mysqli_query($con,"UPDATE stdreglog SET PASSWORD='$npass',CONFPASS='$cpass' where id='$id'")or die();
if($rr>'0')
{
	echo "record updated";
}
else
{
 echo "record not updated";
}
}
?>-->
<form method="post" onsubmit="return validation()">
			<label for="npass">OldPassword:</label>
			<input type="text" name="opass" id="npass" placeholder="password" autocomplete="off">
			<span id="ernpass"></span><br><br> 
            <label for="npass">NewPassword:</label>
			<input type="text" name="npass" id="npass" placeholder="password" autocomplete="off">
			<span id="ernpass"></span><br><br> 
            <label for="cpass">ConfirmPassword:</label>
			<input type="text" name="cpass" id="cpass" placeholder="password" autocomplete="off">
			<span id="ercpass"></span><br><br>       
            <input type="submit" name="sub" value="Submit" class="but3">
            <input type="reset" name="reset" value="Cancel" class="but3">
            </form>
             <script type="text/javascript">
			function validation(){
                var npass=document.getElementById("npass").value;
                var cpass=document.getElementById("cpass").value;
				    if (pass=="") {
					document.getElementById('erpass').innerHTML="**password is requied";
					document.getElementById('erpass').style.color="red";
                    return false;
				}
				    if (pass.length<=5||pass.length>10) {
					document.getElementById('erpass').innerHTML="**password must be between 5 and 10 num";
					document.getElementById('erpass').style.color="red";
					return false;
				}
				    if (isNaN(pass)) {
					document.getElementById('erpass').innerHTML="**characters are not allowed";
					document.getElementById('erpass').style.color="red";
					return false;
				}
                    if (npass=="") {
					document.getElementById('ernpass').innerHTML="**password is requied";
					document.getElementById('ernpass').style.color="red";
					return false;
				}
                    if (pass==npass) {
					document.getElementById('ernpass').innerHTML="**plz enter another password";
					document.getElementById('ernpass').style.color="red";
					return false;
				}
				    if (npass.length<=5||npass.length>10) {
					document.getElementById('ernpass').innerHTML="**password must be between 5 and 10 num";
					document.getElementById('ernpass').style.color="red";
					return false;
				}
				    if (isNaN(npass)) {
					document.getElementById('ernpass').innerHTML="**characters are not allowed";
					document.getElementById('ernpass').style.color="red";
					return false;
				}
                    if (cpass=="") {
					document.getElementById('ercpass').innerHTML="**password is requied";
					document.getElementById('ercpass').style.color="red";
					return false;
				}
                    if (npass!=cpass) {
					document.getElementById('ercpass').innerHTML="**password is not matched";
					document.getElementById('ercpass').style.color="red";
					return false;
				}
				    if (cpass.length<=5||cpass.length>10) {
					document.getElementById('ercpass').innerHTML="**password must be between 5 and 10 num";
					document.getElementById('ercpass').style.color="red";
					return false;
				}
				    if (isNaN(cpass)) {
					document.getElementById('ercpass').innerHTML="**characters are not allowed";
					document.getElementById('ercpass').style.color="red";
					return false;
				}                            
}
</script>

</div>
</div>
<div class="c1">
<div class="rs1">
<h2>Latest 5 Companies:</h2>
</div>
<div class="rs2">
<ul>
<li><a href="#">L&T Constructions</a></li>
<li><a href="#">Shine Computer Solutions</a></li>
<li><a href="#">Sisco Pvt Ltd</a></li>
<li><a href="#">Infosis</a></li>
<li><a href="#">Wipro</a></li>
<li><a href="#">Tcs</a></li>
</ul>
</div>
</div>
</div>
</main>
<footer>
<h1>ALL &COPY; COPYRIGHTS ARE RESERVED BY PASHA</h1>
</footer>
</body>
</html>