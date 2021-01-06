<?php

include 'conn.php';

if(isset($_POST['done'])){

 	$source=$_POST['from'];
 	$dest=$_POST['to'];
 	$uname=$_POST['uname'];
 	$date=$_POST['date'];
 	#echo $date;
 	$xplod=explode('-', $date);
 	#print_r($xplod) ;
 	$string="$xplod[0]-$xplod[1]-$xplod[2]";
 	#echo "$string";
 	$date1=date("Y-m-d",strtotime($string));

   
 $q = " INSERT INTO `booking`( `source`, `dest`,`date`, `uname` ) VALUES ('$source','$dest','$date1','$uname')";

 $query = mysqli_query($conn,$q);
}

header("Location:../crud/MyCMS/test1.php");
?>