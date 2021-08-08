<?php
    include("connection.php");
    session_start();
	?>
<?php
$aa=mysqli_query($con,"select * from stdreglog");
?>
<table border="1" cellpadding="5" style="border-collapse:collapse;">
	<tr>
		<th>id</th>
		<th>fname</th>
          <th>lname</th>
		<th>dob</th>
          <th>phone</th>
          <th>email</th>
          <th>gender</th>
          <th>language</th>
          <th>address</th>
          <th>city</th>
          <th>education</th>
          <th>branch</th>
		<th>passedout</th>
		<th>img_name</th>
          <th>img_path</th>
          <th>image</th>
          <th>username</th>
          <th>password</th>
          <th>cpassword</th>
          <th>update</th>
          <th>delete</th>
	</tr>
	<?php
     while($result=mysqli_fetch_array($aa))
     {
     	?>
     	<tr>
     		<td><?php echo $result['id'];?></td>
     		<td><?php echo $result['FIRSTNAME'];?></td>
     		<td><?php echo $result['LASTNAME'];?></td>
               <td><?php echo $result['D_O_B'];?></td>
               <td><?php echo $result['PHONE'];?></td>
               <td><?php echo $result['EMAIL'];?></td>
               <td><?php echo $result['GENDER'];?></td>
               <td><?php echo $result['LANGUAGE'];?></td>
               <td><?php echo $result['ADDRESS'];?></td>
               <td><?php echo $result['CITY'];?></td>
               <td><?php echo $result['EDUCATION'];?></td>
               <td><?php echo $result['BRANCH'];?></td>
               <td><?php echo $result['PASSEDOUT'];?></td>
               <td><?php echo $result['img_name'];?></td>
               <td><?php echo $result['img_path'];?></td>
               <td><img width="50px" src="<?php echo $result['img_path'];?>"></td>
               <td><?php echo $result['USERNAME'];?></td>
               <td><?php echo $result['PASSWORD'];?></td>
               <td><?php echo $result['CONFPASS'];?></td>
     		<td><a href="stdupdate.php?id=<?php echo $result['id'];?>">edit</a></td>
     		<td><a href="stddelete.php?id=<?php echo $result['id'];?>">delete</a></td>
     		
     	</tr>
     <?php
}
?>
