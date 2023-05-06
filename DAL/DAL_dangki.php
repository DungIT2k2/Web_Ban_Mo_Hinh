<?php
$email = $_GET['username'];
$ho = $_GET['ho'];
$ten = $_GET['ten'];
$pass = $_GET['password'];
$cf_pass = $_GET['cf_password'];
$role = "User";
$status = "1";

include("./DAL_Connect.php");

$sql = "INSERT INTO account (FirstName, LastName, Email, Password,Status,Role) 
VALUES ('$ho', '$ten', '$email', '$pass','$status','$role')";
if ($conn->query($sql) === true){
  echo "<script type='text/javascript'>alert('Đăng kí thành công!');</script>";
  header('Location:../dangnhap.php');
}
$conn->close();
?>