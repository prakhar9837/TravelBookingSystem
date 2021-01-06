<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 	$name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
 $q = " update `user` set `name`='$name',`email`='$email',`address`='$address',`phone`='$phone'where uname='$id'  ";

 $query = mysqli_query($conn,$q);

 header('location:display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title>User Updation</title>
 <link rel="stylesheet" href="../crud/MyCMS/styles/s.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post" action="display.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Update User </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control" pattern="[A-Za-z]{1,}"> <br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <label> Phone: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <!--<a <input type="submit" name="done"> Submit </a><br>-->
  <td colspan="6" align="left"><input type="submit" name="done" /></td>

 </div>
 </form>
 </div>
  <!--<h1 style="text-align: center;"><a href="../crud/welcadmin.php" class="myButton">Go to Homepage</a></h1>-->
</body>
</html>
