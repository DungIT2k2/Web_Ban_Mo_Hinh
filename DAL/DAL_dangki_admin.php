<?php
$email = $_GET['username'];
$ho = $_GET['ho'];
$ten = $_GET['ten'];
$pass = $_GET['password'];
$cf_pass = $_GET['cf_password'];
$role = $_GET['quyen'];
$status = "1";

include("./DAL_Connect.php");

$sql = "INSERT INTO account (FirstName, LastName, Email, Password,Status,Role) 
VALUES ('$ho', '$ten', '$email', '$pass','$status','$role')";
echo $sql;
if ($conn->query($sql) === true){
  echo "<script type='text/javascript'>alert('Đăng kí thành công!');</script>";
  header('Location:../admin.php?id=3&c=0');
}
$conn->close();
?>