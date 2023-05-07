<?php
session_start();
if(isset($_POST['diachi'])){
    $diachi = $_POST['diachi'];
}
if(isset($_POST['sdt'])){
    $sdt = $_POST['sdt'];
}
include("./DAL_Connect.php");
$sql = 'UPDATE account SET DiaCHi="' . $diachi . '", SDT="' . $sdt . '" WHERE IDAccount ="' . $_SESSION['login']['id'] . '"';
// echo $sql;
if ($conn->query($sql)){
    echo 1;
    $_SESSION['login']['diachi'] = $diachi;
    $_SESSION['login']['sdt'] = $sdt;

}
else{
    echo 0;
}
mysqli_close($conn);
?>

