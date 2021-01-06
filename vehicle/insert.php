<?php

include 'conn.php';

if(isset($_POST['done'])){

 	$registrationid=$_POST['registrationid'];
    $model=$_POST['model'];
    $numberplate=$_POST['numberplate'];
    $type=$_POST['type'];
    $bookingid=123;
   
 $q = " INSERT INTO `vehicle`(`registrationid`, `model`, `numberplate`, `type`, `bookingid`) VALUES ('$registrationid','$model','$numberplate','$type','$bookingid')";

 $query = mysqli_query($conn,$q);
 echo '<script type="text/javascript">

          window.onload = function () { alert("Registered Successfully"); }

</script>';
}
?>

<!-- <!DOCTYPE html>
<html>
<head>
 <title>INSERT OPERATION</title>
 <link rel="stylesheet" href="../crud/MyCMS/styles/s.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Registration ID: </label>
 <input type="text" name="registrationid" class="form-control"> <br>

 <label> Model: </label>
 <input type="text" name="model" class="form-control"> <br>

 <label> Numberplate: </label>
 <input type="text" name="numberplate" class="form-control"> <br>

 <label> Type: </label>
 <input type="text" name="type" class="form-control"> <br>

 <label> bookingid: </label>
 <input type="text" name="bookingid" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
 <h1 style="text-align: center;"><a href="../crud/welcadmin.php" class="myButton">Go to Homepage</a></h1>
</body>
</html>
 -->





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Vehicle</title>
    <link rel="stylesheet" href="styles123.css">
  </head>
  <body>
<div class="box">
  <h2>Add Vehicle</h2>
  <form method="post">
<div class="inputBox">
 <input type="text" name="registrationid" required=""> 
 <label> Registration ID: </label>
</div>

<div class="inputBox">
 <input type="text" name="model" required="" pattern="[A-Za-z]{1,}">
 <label> Model: </label>
 </div>
 
 <div class="inputBox">
 <input type="text" name="numberplate" required="" pattern="[A-Za-z]{1,}">
 <label> Number Plate: </label>
 </div>

 <div class="inputBox">
 <input type="text" name="type" required="" pattern="[A-Za-z]{1,}">
 <label> Type: </label>
 </div>
 
<input type="submit" name="done" value="Submit">
  </form>

<h3 style="text-align: center; text-color: red;"><a href="../crud/welcadmin.php">Go to Homepage</a></h3>
</div>
  </body>
</html>
