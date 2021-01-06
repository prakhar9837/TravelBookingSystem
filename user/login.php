<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='admin';

$con=mysqli_connect($servername,$username,$password,$dbname);
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from user where uname=".$username."limit 1 ";
	$result= mysqli_query($con,$sql);
	$row= mysqli_fetch_array($result);

	if($row['uname']==$username && $row['uname']==$password){
		header("Location:./insert.php");
	}
	else{
		echo "You have entered wrong details";
	}

?>
