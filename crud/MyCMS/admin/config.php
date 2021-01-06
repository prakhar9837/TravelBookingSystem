<?php
$link=mysqli_connect('localhost','root','','admin');
if(!$link)
die("something went wrong".mysqli_connect_error());
$query=mysqli_query($link,"SELECT * FROM admin1");
while($row=mysqli_fetch_array($query))
{
    echo $row['name']."<br>";

}

?>
