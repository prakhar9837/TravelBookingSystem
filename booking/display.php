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
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Booking ID </th>
 <th> Source </th>
 <th> Destination </th>
 <th> Helpline No. </th>
 <th> Date </th>
 <th> Cost</th>
 <th> SSN </th>
 <th> Uname</th>
 <th> Delete </th>
 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from booking ";

 $query = mysqli_query($conn,$q);

 while($row = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td><?php echo $row['bookingid']; ?></td>
		<td><?php echo $row['source']; ?></td>
		<td><?php echo $row['dest']; ?></td>
		<td><?php echo $row['helplineno']; ?></td>
		<td><?php echo $row['date']; ?></td>
    <td><?php echo $row['cost']; ?></td>
    <td><?php echo $row['ssn']; ?></td>
    <td><?php echo $row['uname']; ?></td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $row['bookingid']; ?>" class="text-white"> Delete </a>  </button> </td>
 <!--<td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $row['bookingid']; ?>" class="text-white"> Update </a> </button> </td>-->

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
  <!--<h1 style="text-align: center;"><a href="../crud/welcadmin.php" class="myButton">Go to Homepage</a></h1>-->

</body>
</html>