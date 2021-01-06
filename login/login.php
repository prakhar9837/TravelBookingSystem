<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='admin';

$con=mysqli_connect($servername,$username,$password,$dbname);
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="select* from login where username='".$username."' and password='".$password."'limit 1 ";
	$result= mysqli_query($con,$sql);
	$row= mysqli_fetch_array($result);

	if($row['username']==$username && $row['password']==$password){
		header("Location:../crud/welcadmin.php");
	}
	else{
		echo "You have entered wrong details";
	}

?>
