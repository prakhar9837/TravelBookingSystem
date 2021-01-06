 <?php

 include 'conn.php'; 
 $q = "select * from login";

 $query = mysqli_query($conn,$q);

 $row = mysqli_fetch_array($query);
 ?>

<html>
<head>
<meta cahrset="UTF-8">
<link rel="icon" type="image\jpg" href="MyCMS\img\logo.jpg">
<link rel="stylesheet" href="MyCMS/styles/s.css">
<title>WELCOME ADMIN </title>
</head>
<body background="./images/back.jpg" style="
    margin-bottom: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    background-color: rgba(50, 106, 165, 0.8);
">
    
<div class="container">
 <div id="header">
 <img src="MyCMS/img/logo.jpg" height="50px" width="100px">
 <ul><a href="../crud/MyCMS/index.php" style="color: red; text-decoration: none;">LogOut</a></ul>
 
 </div>
 <br>
 <h1 style="text-align: center;"> Welcome to Admin Page</h1>
 <h2 style="text-align:left; margin: 20px" >Total No. of bookings:<?php echo $row['book_count'];?> </h2>
 <div id="but" style="background-color: rgba(0,0,0,.5); width:30%; margin:auto;">
     <h1 style="color:yellow"><a href="insert.php" class="myButton">Add Employee</a></h1><br>
     <h1><a href="display.php" class="myButton">View Employee</a></h1><br>
     <h1><a href="../vehicle/insert.php"class="myButton">Add Vehicle</a></h1><br>
     <h1><a href="../vehicle/display.php" class="myButton">View Vehicles</a></h1><br>
     <h1><a href="../user/display.php" class="myButton">View Customers</a></h1><br>
 </div>
 <div id="footer">
     <p style="text-align:center">© copyright reserved 2019

</p></div>

</div></body></html>