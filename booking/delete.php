<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `booking` WHERE bookingid = $id ";

mysqli_query($conn, $q);

header('location:display.php');

?>