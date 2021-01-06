<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `vehicle` WHERE registrationid = $id ";

mysqli_query($conn, $q);

header('location:display.php');

?>