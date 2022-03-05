<?php
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['pass'];

$con=new mysqli("localhost","root","","student1");

if($con->connect_error){
    die("failed to connect:".$con->connect_error);
}else{
    $stmt=$con->prepare("insert into login(firstname,lastname,email,password)values(?,?,?,?)");
    $stmt->bind_param("ssss",$firstname,$lastname,$email,$password);
    $stmt->execute();
    echo "<script>window.open('login.html','_self')</script>";
    $stmt->close();
    $con->close();
}
?>