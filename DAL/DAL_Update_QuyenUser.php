<?php
include("./DAL_Connect.php");

// Lấy giá trị của nút checkbox từ dữ liệu gửi lên
$IDQuyen = $_POST['idq'];
$KhuVucQL = $_POST['kv'];
$Them = $_POST['Them'];
$Xoa = $_POST['Xoa'];
$Sua = $_POST['Sua'];
$Xem = $_POST['Xem'];
// Câu truy vấn UPDATE
$sql = "UPDATE phanquyen SET Them=" . $Them . ", Xoa=" . $Xoa . ", Sua=" . $Sua . ", Xem=" . $Xem . " WHERE KhuVucQuanLi ='" . $KhuVucQL . "' AND IDQuyen='" . $IDQuyen . "'";
// echo $sql;
if ($conn->query($sql)){
    echo 1;
}
else{
    echo 0;
}
mysqli_close($conn);
?>