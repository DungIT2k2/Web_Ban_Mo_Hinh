<?php
if (isset($_GET['rm'])) {
    include("DAL_Connect.php");
    $id = $_GET['rm'];
    $sql = "DELETE FROM product where ProductID= $id";
    $qry=mysqli_query($conn, $sql);
    header('Location:../admin.php?id=1');
}
?>