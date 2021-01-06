<!DOCTYPE html>
<html>
<head>
    <title>Add Vehicle</title>
    <meta charset="UTF-8">
    <style>
    h1{
        
        text-align:center;
        text-decoration:underline;
        background-color:orange;
        padding-top:0px;
        margin:0px;
        
    }
    tr,th,td{
        padding:10px;
        color:white;
        
    }
    </style>
</head>
<body background="../images/myadmin.png">
    <form action="vehicle.php" method="post" enctype="multiple/form-data">
    <table width="800">
        <h1>Add a vehicle for service</h1>
        <tr>
            <td style="align:right"> <strong>Type</strong></td>
            <td> <input type="text" name="type"/></td>
        </tr>
        <tr>
            <td style="align:right"><strong>Model</strong></td>
            <td><input type="text" name="model"/></td>
        </tr>
        
        <tr>
            <td style="align:right"><strong>Number Plate</strong></td>
            <td> <input type="text" name="nplate"/></td>
        </tr>
        
        <tr>
            <td style="align:right"><strong>Registration Number</strong></td>
            <td><input type="text" name="rno"/></td>
        </tr>
        
        <tr>
            <td style="align:center"><strong>BookingID</strong></td>
            <td><input type="text" name="bid"/></td>
        </tr>
        
        <tr>
        <td colspan="6" style="align:center"><input type="submit" name="submit" value="ADD"/></td>
        </tr>



</table>
</form>
</body>
</html>
<?php
$link=mysqli_connect('localhost','root','','admin');
if (mysqli_connect_error()) {  
    die ("There was an error connecting to the database"); 
}

if(isset($_POST['submit'])){
     $type=$_POST['type'];
     $model=$_POST['model'];
     $nplate=$_POST['nplate'];
    $rno=$_POST['rno'];
    $bid=$_POST['bid'];
    if($type=='' OR $model=='' OR $nplate=='' OR $phone=='' OR $rno=='' OR $bid==''){
        echo "<script>alert('please fill all the fields')</script>";
        exit();
    }
    else{
        $insert_post="INSERT INTO vehicles VALUES('$type','$model','$nplate','$rno','$bid')";
        $query=mysqli_query($link,$insert_post);
            echo "<script>alert('Vehicle has been added')</script>";
            echo"<scripts>window.open('vehicle.php','_self')</script>";
            
    }


}







?>