<?php
include("./DAL_Connect.php");

$email = $_POST['email_current'];
// Câu truy vấn UPDATE
$sql = "Select * from account where Email='".$email."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo 1;
}else{
    echo 0;
}
mysqli_close($conn);
?>