<?php
session_start();
include("./DAL_Connect.php");

// Câu truy vấn UPDATE
$tenquyen = $_SESSION['login']['role'];
$kv = $_POST['kv'];
$checkquyen = $_POST['check'];
$sql = "SELECT * FROM phanquyen pq JOIN quyen q on pq.IDQuyen = q.IDQuyen WHERE q.TenQuyen ='".$tenquyen."' AND pq.KhuVucQuanLi ='".$kv."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    echo $row[$checkquyen];
}
mysqli_close($conn);
?>