<?php
if (isset($_GET['rm'])) {
    include("DAL_Connect.php");
    $id = $_GET['rm'];
    // $image = $_GET['im'];
    $sql = "DELETE FROM product where ProductID= $id";
    $qry=mysqli_query($conn, $sql);
    // unlink('../DAL/Image_SanPham/'.$image);
    header('Location:../admin.php?id=1');
}
?>