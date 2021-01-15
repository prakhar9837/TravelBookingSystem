<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='admin';

$con=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	 $password=$_POST['password'];
}
	$sql="select * from login where username='$username' and password='$password'";
	$result= mysqli_query($con,$sql);
	$num_row=mysqli_num_rows($result);
    if($num_row != 0)
    { 
		echo '<script type="text/javascript">

          window.onload = function () { alert("Logged In Successfully"); }

		   </script>';
		   sleep(2);
        //$_SESSION['username']=$username;
         header('Location:../crud/welcadmin.php');
	}
	else {
		//echo "Invalid Crudentials";
		header('Location:.');
	}
?>
