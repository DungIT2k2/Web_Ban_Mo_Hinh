<?php
include("./DAL_Connect.php");
$id = $_POST['id'];
$trangthai = $_POST['trangthai'];
$sql = 'Update account Set Status="'.$trangthai.'" Where IDAccount="'.$id.'"';
if($conn->query($sql)){
    echo 1;
}
mysqli_close($conn);
?>