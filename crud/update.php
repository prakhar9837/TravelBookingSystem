<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $ssn=$_POST['ssn'];
    $role=$_POST['role'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $email=$_POST['email'];
    $loginid=$_POST['loginid'];
    $password=$_POST['password'];
    $adminid=$_POST['adminid'];
 $q = " update crud set  role='$role', name='$name', phone='$phone', address='$address', salary=$salary, email='$email', loginid=$loginid, password=$password,adminid=$adminid where ssn=$id  ";

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

 <!--<label> SSN: </label>
 <input type="text" name="ssn" class="form-control"> <br>-->

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
</html>