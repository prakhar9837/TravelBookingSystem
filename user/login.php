<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Form</title>
    <link rel="stylesheet" href="styles123.css">
    <style>
body {
  background-image: url('Admin_login_back.jpeg');
}
</style>
  </head>
  <body>
<div class="box">
<!-- <img src="images.jpg" style="width:100px;"/> -->
  <h2>Customer Login</h2>
  <form action="userLogin.php" method="POST">
<div class="inputBox">
  <input type="text" name="username" required="">
  <label>UserName </label>
</div>
<div class="inputBox">
  <input type="Password" name="password" required="">
  <label>Password</label>
</div>
<input type="submit" name="submit" value="Submit">
  </form>
  <!-- <button style="background-color: RGB(180,100,100); ">BACK </button> -->
  <h4 style="text-align: center; color: lightblue;">Not Registered? <a href="insert.php"  style="text-align: center; color: #FFCCCB; text-decoration: none;">Register</a></h4>

<h3 style="text-align: center;"><a href="../crud/MyCMS/index.php"  style="text-align: center; color: white; text-decoration: none;">HomePage</a></h3>
</div>
  </body>
</html>
