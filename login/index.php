<!-- <!DOCTYPE html>
<html>
<head>
<title> Admin login form</title>
<link rel="stylesheet" a href="css\style.css">
<link rel="stylesheet" a href="css\fontawesome.min.css">
</head>
<body>
<div class="container">
<img src="images.jpg"/>
<form action="login.php" method="POST">
<div class="form-input">
<input type="text" name="username" placeholder="Enter the User Name"/>
</div>
<div class="form-input">
<input type="password" name="password" placeholder="Enter the password"/>
</div>
<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
</form>
</div>
</body>
</html>
 -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Form</title>
    <link rel="stylesheet" href="styles123.css">
    <style>
body {
  background-image: url('admin_background.jpeg');
}
</style>
  </head>
  <body>
<div class="box">
<img src="images.jpg" style="width:100px;"/>
  <h2></h2>
  <form action="login.php" method="POST">
<div class="inputBox">
  <input type="text" name="username" required="">
  <label>UserName</label>
</div>
<div class="inputBox">
  <input type="Password" name="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
  <label>Password</label>
</div>
<input type="submit" name="submit" value="Submit">
  </form>
  <!-- <button style="background-color: RGB(180,100,100); ">BACK </button> -->
  <h3 style="text-align: center;"><a href="../crud/MyCMS/index.php"  style="text-align: center; color: #FFCCCB; text-decoration: none;">Home Page</a></h3>
</div>
  </body>
</html>