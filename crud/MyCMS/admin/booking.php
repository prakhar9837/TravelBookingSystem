<!DOCTYPE html>
<html>
<head>
    <title>User booking</title>
    <meta charset="UTF-8">
    <style>
        h1{
            text-align:center;
        text-decoration:underline;
        background-color:orange;
        padding-top:0px;
        margin:0px;
        }
        body{
            background-color:cyan;
        }
        div{
            padding-left:400px;
        }
    </style>
</head>
<body>
    <form action="booking.php" method="post" enctype="multiple/form-data">
    <table width="800">
        <h1>MAKE BOOKING</h1>
        <div id="main">
        <tr>
            <td style="align:right"> <strong>Source</strong></td>
            <td> <input type="text" name="source"/></td>
        </tr>
        <tr>
            <td style="align:right"><strong>Destination</strong></td>
            <td><input type="text" name="dest"/></td>
        </tr>
        
        <tr>
            <td style="align:right"><strong>Travel Date</strong></td>
            <td> <input type="date" name="date"/></td>
        </tr>
        <tr>
        <td colspan="6" style="align:center"><input type="submit" name="submit" value="BOOK"/></td>
        </tr>



</table>
</form>
</div>
</body>
</html>
<?php
$link=mysqli_connect('localhost','root','','admin');
if (mysqli_connect_error()) {  
    die ("There was an error connecting to the database"); 
}

if(isset($_POST['submit'])){
     $source=$_POST['source'];
     $dest=$_POST['dest'];
     $date=$_POST['date'];
    if($source=='' OR $dest=='' OR $date==''){
        echo "<script>alert('please fill all the fields')</script>";
        exit();
    }
    else{
        $insert_post="INSERT INTO booking VALUES('$source','$dest','$date')";
        $query=mysqli_query($link,$insert_post);
            echo "<script>alert('Thanks For Making the Booking')</script>";
            echo"<scripts>window.open('booking.php','_self')</script>";
            
    }


}







?>