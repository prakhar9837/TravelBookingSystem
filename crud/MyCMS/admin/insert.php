
<!DOCTYPE html>
<html>
<head>
    <title>Insert Page</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="insert.php" method="post" enctype="multiple/form-data">
    <table width="800" align="center" border="2">
        <tr>
            <td clospan="6"><h1>Insert employee</h1></td>

        </tr>
        <tr>
            <td style="align:right"> <strong>SSN</strong></td>
            <td> <input type="text" name="ssn"/></td>
        </tr>
        <tr>
            <td align="right"><strong> Role</strong></td>
            <td><input type="text" name="role"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Name</strong></td>
            <td> <input type="text" name="name"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Phone number</strong></td>
            <td><input type="text" name="phone"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Address</strong></td>
            <td><input type="text" name="address"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Salary</strong></td>
            <td><input type="text" name="salary"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Email</strong></td>
            <td><input type="text" name="email"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>LogIn ID</strong></td>
            <td><input type="text" name="loginid"require></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Password </strong></td>
            <td><input type="text" name="password"require></td>
        </tr>
        
        <tr>
            <td align="right"><strong>AdminID</strong></td>
            <td><input type="text" name="adminid"/></td>
        </tr>
        <td colspan="6" align="center"><input type="submit" name="submit" value="ADD"/></td>
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
     $ssn=$_POST['ssn'];
     $role=$_POST['role'];
     $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $email=$_POST['email'];
    $loginid=$_POST['loginid'];
    $password=$_POST['password'];
    $adminid=$_POST['adminid'];
    if($ssn=='' OR $role=='' OR $name=='' OR $phone=='' OR $address=='' OR $salary=='' OR $email=='' OR $loginid=='' OR $password=='' OR $adminid==''){
        echo "<script>alert('please fill all the fields')</script>";
        exit();
    }
    else{
        $insert_post="INSERT INTO insert VALUES('$ssn','$role','$name','$phone','$address','$salary','$email','$loginid','$password','$adminid')";
        $query=mysqli_query($link,$insert_post);
            echo "<script>alert('employee has been added')</script>";
            echo"<scripts>window.open('insert.php','_self')</script>";
            header("Location:insert.php");
    }


}







?>