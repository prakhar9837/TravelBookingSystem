<!-- <!DOCTYPE html>
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
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Registration ID </th>
 <th> Model </th>
 <th> Number Plate </th>
 <th> Type </th>
 <th> Booking ID </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from vehicle ";

 $query = mysqli_query($conn,$q);

 while($row = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td><?php echo $row['registrationid']; ?></td>
		<td><?php echo $row['model']; ?></td>
		<td><?php echo $row['numberplate']; ?></td>
		<td><?php echo $row['type']; ?></td>
		<td><?php echo $row['bookingid']; ?></td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $row['registrationid']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $row['registrationid']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
<h1 style="text-align: center;"><a href="../crud/welcadmin.php" class="myButton">Go to Homepage</a></h1>

</body>
</html>
 -->


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
		<h2>VEHICLE DETAILS</h2>
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
              Registration ID
							</div>
							<div class="cell">
							Model
							</div>
							<div class="cell">
							Number Plate
							</div>
							<div class="cell">
							Type
							</div>
							<div class="cell">
				
							</div>
						</div>
						<?php

							include 'conn.php'; 
							$q = "select * from vehicle ";

							$query = mysqli_query($conn,$q);

							while($row = mysqli_fetch_array($query)){
							?>
						<div class="row">
							<div class="cell" data-title="Name">
							<?php echo $row['registrationid']; ?>
							</div>
							<div class="cell" data-title="Job Title">
							<?php echo $row['model']; ?>
							</div>
							<div class="cell" data-title="Email">
							<?php echo $row['numberplate']; ?>
							</div>
							<div class="cell" data-title="Location">
							<?php echo $row['type']; ?>
							</div>
							<div class="cell" data-title="Delete">
							<button class="btn-danger btn" style="margin:5px"> <a href="delete.php?id=<?php echo $row['registrationid']; ?>" class="text-white"> Delete </a> </button> 
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