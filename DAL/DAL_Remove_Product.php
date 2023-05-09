<?php
if (isset($_GET['rm'])) {
    $msg = "Xóa thành công !";
    include("DAL_Connect.php");
    $id = $_GET['rm'];
    $sql = "DELETE FROM product where ProductID='" . $id . "'";
    if ($conn->query($sql) == true) {
        echo "<script type='text/javascript'> 
        alert('Xóa thành công !!!');
        window.location.href = \"../admin.php?id=1\"; // chuyển hướng đến trang admin khi xác nhận
     </script>";
    }
    $conn->close();
}
