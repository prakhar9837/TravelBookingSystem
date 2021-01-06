<?php
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
    if($ssn=='' OR $role=='' OR $name=='' OR $phone=='' OR $address=='' OR $salary=='' OR $email=='' OR $adminid==''){
       echo "<script>alert('please fill the required fields')</script>";
        exit();
       # header("Location:insert.php");
       
   }
    else{
    $conn = new mysqli("localhost","root","","admin");

if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
    $SELECT = "SELECT ssn from insert1 where ssn = ? Limit 1";
    $INSERT = "INSERT into insert1 values(?,?,?,?,?,?,?,?,?,?)";
    
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("i",$ssn);
    $stmt->execute();
    $stmt->bind_result($ssn);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if($rnum==0) {
        $stmt->close();
        
         $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("issssssssi",$ssn,$role,$name,$phone,$address,$salary,$email,$loginid,$password,$adminid);
    $stmt->execute();
        echo "new record inserted successfully";
    }
    else {
        echo "someone already registered using this ssn";
    }
    $stmt->close();
    $conn->close();
}
}
?>  