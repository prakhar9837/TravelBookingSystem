<!DOCTYPE html>
<html>
<head>
	<title>Delete page</title>
</head>
<body>
<form action="delete.php" method="post">
	<h2>SSN:<input type="text" name="ssn" placeholder="Enter the ssn here" required></h2>
	<input type="submit" name="submit">
	<input type="reset" value="Reset" onClick="window.location.reload()">
</form>
</body>
</html>





<?php
session_start();
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ss1=$_POST['ssn'];
// sql to delete a record
$sql = "DELETE FROM insert1 WHERE ssn= '$ss1'";
$res=mysqli_query($conn,$sql);
if ($res) {
    echo "Record is  deleted";
} else {
    echo "Record deleted unsuccessfully";
}

$conn->close();

}
?>