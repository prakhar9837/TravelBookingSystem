<?php

include 'conn.php';

if(isset($_POST['done'])){

 	$ssn=$_POST['ssn'];//
    $role=$_POST['role'];//
    $name=$_POST['name'];//
    $phone="9212123";
    $address=$_POST['address'];//
    $salary=323;
    $email="prakhar9837";
    $loginid=$_POST['loginid'];//
    $password=$_POST['password'];//
    $adminid=1;
 $q = " INSERT INTO `crud`(`ssn`, `role`, `name`, `phone`, `address`, `salary`, `email`, `loginid`, `password`, `adminid`) VALUES ('$ssn','$role','$name','$phone','$address','$salary','$email','$loginid','$password','$adminid')";

 $query = mysqli_query($conn,$q);
 echo '<script type="text/javascript">

          window.onload = function () { alert("Registered Successfully"); }

   </script>';
}
?>
<!-- 
<!DOCTYPE html>
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

 <label> SSN: </label>
 <input type="text" name="ssn" class="form-control"> <br>

 <label> role: </label>
 <input type="text" name="role" class="form-control" pattern="[A-Za-z]{1,}"> <br>

 <label> name: </label>
 <input type="text" name="name" class="form-control" pattern="[A-Za-z]{1,}"> <br>

 <label> phone: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <label> address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <label> salary: </label>
 <input type="text" name="salary" class="form-control"> <br>

 <label> email: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> login: </label>
 <input type="text" name="loginid" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <label> adminid: </label>
 <input type="text" name="adminid" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
 <h1 style="text-align: center;"><a href="../crud/welcadmin.php" class="myButton">Go to Homepage</a></h1>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Operation</title>
    <link rel="stylesheet" href="styles123.css">
  </head>
  <body>
<div class="box">
  <h2>Insert Operation</h2>
  <form method="post">
<div class="inputBox">
 <input type="text" name="ssn" required=""> 
 <label> SSN: </label>
</div>

<div class="inputBox">
 <input type="text" name="role" required="" pattern="[A-Za-z]{1,}">
 <label> Job Profile: </label>
 </div>
 
 <div class="inputBox">
 <input type="text" name="name" required="" pattern="[A-Za-z]{1,}">
 <label> Name: </label>
 </div>

 <div class="inputBox">
 <input type="text" name="address" required="" pattern="[A-Za-z]{1,}">
 <label> Location: </label>
 </div>

 <div class="inputBox">
 <input type="text" name="loginid" required="">
 <label> LoginId: </label>
 </div>

 <div class="inputBox">
 <input type="password" name="password" required="">
 <label> Password: </label>
 </div>

 
<input type="submit" name="done" value="Submit">
  </form>
<h3 style="text-align: center; color: red;"><a href="../crud/welcadmin.php">Previous Page</a></h3>
</div>
  </body>
</html>
