<?php
#$ssn=mysql_real_escape_string($_POST['ssn']);
#$role=mysql_real_escape_string($_POST['role']);
#$name=mysql_real_escape_string($_POST['name']);
#$phone=mysql_real_escape_string($_POST['phone']);

if(isset($_GET['edit'])){
	$ssn=$_GET['ssn'];
	$rec = mysqli_query($conn,"SELECT * FROM insert1 WHERE ssn=$ssn");
	$record=mysqli_fetch_array($res);
	$ssn=record['ssn'];
	$name=record['name'];
	$role=record['role'];
	$phone=record['phone'];
}




?>
<!DOCTYPE html>
<html>
<head>
    <title>update Page</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="insert1.php" method="post" enctype="multiple/form-data">
    <table width="800" align="center" border="2">
        <tr>
            <td clospan="6"><h1>update employee</h1></td>

        </tr>
        <tr>
            <td align="right"> <strong>SSN</strong></td>
            <td> <input type="text" name="ssn" value="<?php echo $ssn; ?>" /></td>
        </tr>
        <tr>
            <td align="right"><strong> Role</strong></td>
            <td><input type="text" name="role" value="<?php echo $role; ?>"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Name</strong></td>
            <td> <input type="text" name="name" value="<?php echo $name; ?>"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Phone number</strong></td>
            <td><input type="text" name="phone" value="<?php echo $phone; ?>"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Address</strong></td>
            <td><input type="text" name="address" value="<?php echo $ssn; ?>"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Salary</strong></td>
            <td><input type="text" name="salary" value="<?php echo $ssn; ?>"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Email</strong></td>
            <td><input type="text" name="email" value="<?php echo $ssn; ?>"/></td>
        </tr>
        
        <tr>
            <td align="right"><strong>LogIn ID</strong></td>
            <td><input type="text" name="loginid" value="<?php echo $ssn; ?>" require /></td>
        </tr>
        
        <tr>
            <td align="right"><strong>Password </strong></td>
            <td><input type="text" name="password" value="<?php echo $ssn; ?>" require /></td>
        </tr>
        
        <tr>
            <td align="right"><strong>AdminID</strong></td>
            <td><input type="text" name="adminid" value="<?php echo $ssn; ?>"/></td>
        </tr>
        <td colspan="6" align="left"><input type="submit" name="submit" value="ADD"/></td>
        </tr>



</table>
</form>
</body>
</html>