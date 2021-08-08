<?php
include("connection.php");
$rr=mysqli_query($con,("select * from `cmpreg`"));
?>
<table border="1" cellpadding="10" cellspacing="10" style="border-collapse:collapse;">
	<tr>
	<th>s_no</th>
	<th>cmpname</th>
	<th>address</th>
	<th>city</th>
	<th>cmppname</th>
	<th>contact</th>
	<th>email</th>
	<th>cmpwebsite</th>
	<th>uname</th>
	<th>cpass</th>
	<th>pass</th>
	<th>update</th>
	<th>delete</th>
	</tr>
	<?php
	while($result=mysqli_fetch_array($rr)){
		?>
	<tr>
		<td><?php echo $result['s_no'];?></td>
		<td><?php echo $result['cmpname'];?></td>
		<td><?php echo $result['address'];?></td>
		<td><?php echo $result['city'];?></td>
		<td><?php echo $result['cmppname'];?></td>
		<td><?php echo $result['contact'];?></td>
		<td><?php echo $result['email'];?></td>
		<td><?php echo $result['cmpwebsite'];?></td>
		<td><?php echo $result['uname'];?></td>
		<td><?php echo $result['pass'];?></td>
		<td><?php echo $result['cpass'];?></td>
		<td><a href="cmpupdate.php?id=<?php echo $result['s_no'];?>">edit</a></td>
		<td><a href="cmpdelete.php?id=<?php echo $result['s_no'];?>">delete</a></td>
	</tr>
	<?php
}
?>
</table>
