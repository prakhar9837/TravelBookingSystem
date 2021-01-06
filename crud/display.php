<!DOCTYPE html>
<html>
<head>
 <title>Display</title>
 	<link rel="stylesheet" href="../crud/MyCMS/styles/s.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>

	
	<div class="limiter">
		<div class="container-table100">
		<h2>EMPLOYEE DETAILS</h2>
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Name
							</div>
							<div class="cell">
								Job Title
							</div>
							<div class="cell">
								LoginId
							</div>
							<div class="cell">
								Location
							</div>
							<div class="cell">
								
							</div>
						</div>
						<?php

							include 'conn.php'; 
							$q = "select * from crud ";

							$query = mysqli_query($conn,$q);

							while($row = mysqli_fetch_array($query)){
							?>
						<div class="row">
							<div class="cell" data-title="Name">
							<?php echo $row['name']; ?>
							</div>
							<div class="cell" data-title="Job Title">
							<?php echo $row['role']; ?>
							</div>
							<div class="cell" data-title="Email">
							<?php echo $row['loginid']; ?>
							</div>
							<div class="cell" data-title="Location">
							<?php echo $row['address']; ?>
							</div>
							<div class="cell" data-title="Delete">
							<button class="btn-danger btn" style="margin:5px"> <a href="delete.php?id=<?php echo $row['ssn']; ?>" class="text-white"> Delete </a>  </button> 
							</div>
						</div>


						<?php 
 							}
  						?>

					</div>
			</div>
			<script type="text/javascript">
 
 				$(document).ready(function(){
 				$('#tabledata').DataTable();
 				}) 
 
			</script>
			<h1 style="text-align: center;"><a href="../crud/welcadmin.php" class="myButton">Go to Homepage</a></h1>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>