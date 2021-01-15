<!-- 
<!DOCTYPE html>
<html>
<head>
 <title>User Registration</title>
 	<link rel="stylesheet" href="styles/s.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post" action="randuser.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Register User</h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="uname" class="form-control" > <br>
 <label> Name: </label>
 <input type="text" name="name" class="form-control" pattern="[A-Za-z]{1,}"> <br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <label> Phone: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <a <input type="submit" name="done"> Submit </a><br>
  <td colspan="6" align="left"><input type="submit" name="done" /></td>

 </div>
 </form>
 </div>
 <h1 style="text-align: center;"><a href="../crud/MyCMS/index.php" class="myButton">Go to Homepage</a></h1>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register User</title>
    <link rel="stylesheet" href="styles123.css">
  </head>
  <body>
<div class="box">
  <h2>User Registration</h2>
  <form method="post" action="randuser.php">

<div class="inputBox">
 <input type="text" name="name" required="" pattern="[A-Za-z]{1,}">
 <label> Name:  </label>
 </div>
 
 <div class="inputBox">
 <input type="text" name="address" required="" pattern="[A-Za-z]{1,}">
 <label> Location: </label>
 </div>

 <div class="inputBox">
 <input type="text" name="email" required="">
 <label> Email: </label>
 </div>

 <div class="inputBox">
 <input type="text" name="uname" required=""> 
 <label> Username: </label>
</div>

 <div class="inputBox">
 <input type="password" name="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> 
 <label> Password: </label>
</div>
 
<input type="submit" name="done" value="Submit">
  </form>

<h3 style="text-align: center; text-color: red;"><a href="login.php">BACK</a></h3>
</div>
  </body>
</html>
