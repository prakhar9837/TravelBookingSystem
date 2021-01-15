<?php 
// 	$servername='localhost';
// 	$username='root';
// 	$password='';
// 	$dbname='admin';

// $con=mysqli_connect($servername,$username,$password,$dbname);
// 	$username=$_POST['username'];
// 	$password=$_POST['password'];

// 	$sql="select * from user where uname=".$username."limit 1 ";
// 	$result= mysqli_query($con,$sql);
// 	$row= mysqli_fetch_array($result);

// 	if($row['uname']==$username && $row['uname']==$password){
// 		header("Location:./insert.php");
// 	}
// 	else{
// 		echo "You have entered wrong details";
// 	}

	$servername='localhost';
	$username='root';
	$password='';
	$dbname='admin';

$con=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
}
	$sql="select * from user where uname='$username'";
	$result= mysqli_query($con,$sql);
	$num_row=mysqli_num_rows($result);
    if($num_row != 0)
    { 
		   sleep(2);
        //$_SESSION['username']=$username;
         header('Location:../crud/booktravel.php');
	}
	else {
		//echo "Invalid Crudentials";
		header('Location:.');
	}
	//header('Location:../crud/booktravel.php');
?>
