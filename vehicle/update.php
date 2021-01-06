<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $registrationid=$_POST['registrationid'];
    $model=$_POST['model'];
    $numberplate=$_POST['numberplate'];
    $type=$_POST['type'];
    $bookingid=$_POST['bookingid'];
 $q = " update vehicle set model='$model', numberplate='$numberplate', type='$type',bookingid=$bookingid where registrationid=$id  ";

 $query = mysqli_query($conn,$q);

 header('location:display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title>Update</title>
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
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

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