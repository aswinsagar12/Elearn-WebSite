<?php

include 'config.php';
error_reporting(0);

 if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = md5($_POST['password']) ;
     $sql = "INSERT INTO users(User_Name, Email_Id ,Password)
     VALUES('$username', '$email', '$password')";
     $result = mysqli_query($conn, $sql);




 }






/*
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name  = $_POST['username'];
$email =$_POST['email'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con,  $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "User Already Taken";
}else{
    $reg= "insert into usertable('name ,password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}
*/
?>

