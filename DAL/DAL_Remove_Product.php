<?php
if (isset($_GET['rm'])) {
    include("DAL_Connect.php");
    $id = $_GET['rm'];
    $sql = "DELETE FROM product where ProductID='".$id."'";
    echo $sql;
    if ($conn->query($sql) == true) {
        $msg = "Xoá thành công!"; 
        echo "<script type='text/javascript'> alert('$msg'); </script>";
    }
    $conn->close();
}
header('Location:../admin.php?id=1');
?>
