<?php 
	 include 'conn.php';
	$loginid=$_POST['username'];
	$password=$_POST['password'];

	$sql="select* from crud where loginid='".$loginid."' and password='".$password."'limit 1 ";
	$result= mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);

	if($row['loginid']==$loginid && $row['password']==$password){
		header("Location:../crud/welcemp.php");
	}
	else{
		echo "You have entered wrong details";
	}

?>
