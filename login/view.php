<!DOCTYPE html>
<html>
<head>
	<title>View of the database</title>
</head>
<body>
	<h2 align="center">Employeee details</h2>
<table align="center" border="1px" style="width: 600px;line-height: 40px;">
<tr>
<th>ssn</th>
<th>role</th>
<th>name</th>
<th>phone</th>
<th>address</th>
<th>salary</th>
<th>email</th>
<th>loginid</th>
<th>password</th>
<th>adminid</th>
<th>Action</th>
</tr>
<?php 
$conn =mysqli_connect("localhost","root","","admin");
if($conn-> connect_error){
	die("Connection failed:".$conn-> connect_error);
}

$sql="SELECT * FROM insert1";						
$result=mysqli_query($conn,"SELECT * FROM insert1");
if($result-> num_rows > 0){
	while($row= mysqli_fetch_array($result)){ ?>
		<tr>
		<td><?php echo $row['ssn']; ?></td>
		<td><?php echo $row['role']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['salary']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['loginid']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php echo $row['adminid']; ?></td>
		<td><a href="update.php?edit=<?php $row['ssn'];?>">Edit</a>
<?php
	}
}	
	else{
		echo "0 result";
	}
	?>
</table>
</body>
</html>
