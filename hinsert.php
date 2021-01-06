<?php
$vid = $_POST['hid'];
$vname=$_POST['hname'];
$sid=$_POST['nor'];
$tin=$_POST['hadd'];
$tout=$_POST['wpswd'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "hostel";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
    $SELECT = "SELECT hid from hostel where hid = ? Limit 1";
    $INSERT = "INSERT into hostel values(?,?,?,?,?)";
    
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$hid);
    $stmt->execute();
    $stmt->bind_result($hid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if(rnum==0) {
        $stmt->close();
        
         $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssii",$hid,$hname,$nor,$hadd,$wpswd);
    $stmt->execute();
        echo "new record inserted successfully";
    } else {
        echo "someone already registered using this hid";
    }
    $stmt->close();
    $conn->close();
}
?>