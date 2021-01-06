<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include 'conn.php';

if(isset($_POST['done'])){

	$uname=$_POST['uname'];
 	$name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
 $q = " INSERT INTO `user`(`uname`,`name`, `email`, `address`, `phone`) VALUES ('$uname','$name','$email','$address','$phone')";

 $query = mysqli_query($conn,$q);
 	echo "<div style=\" text-align:center; size:30px; padding-top: 20px; padding-bottom: 20px;\" >"."Registered successfully"."</div>"; 
 	}
?>

<div style="align-content: center;text-align: center;">
	<br>
 	<a href="../crud/booktravel.php" style="text-align: center;size: 30px;">Continue booking</a>
 	<br><br><br>
 	<a href="../crud/MyCMS/index.php" style="text-align: center;size: 30px;">Go to Homepage </a>
 	</div>

</body>
</html>






	


