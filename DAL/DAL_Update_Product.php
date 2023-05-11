<?php
include("DAL_Connect.php");

$id = $_POST['ID_ChinhSua'];
$loaiSP = $_POST['loaiSP_ChinhSua'];
$tenSP = $_POST['tenSP_UD'];
$soLuong = $_POST['soLuong_UD'];
$giaBanRa = $_POST['gia_UD'];
$chiTiet = $_POST['chiTiet_UD'];
$canNang = $_POST['weightSP_ChinhSua'];
$chieuCao = $_POST['heightSP_ChinhSua'];
$chatLieu = $_POST['materialSP_ChinhSua'];
$imageTemp = $_POST['temp_file_img_UD'];

if ($_FILES['image_input_SSP']['name'] != '') {
    $image = $_FILES['image_input_SSP']['name'];
    $tmp_Image = $_FILES["image_input_SSP"]["tmp_name"];
    move_uploaded_file($tmp_Image, '../DAL/Image_SanPham/' . $image);
    $sql = "UPDATE product SET IDCaterogyProduct='$loaiSP', NameProduct='$tenSP', Amount='$soLuong', Price='$giaBanRa', Image='$image', ProductDetail='$chiTiet', Height='$chieuCao', Weight='$canNang', Material='$chatLieu' where ProductID='$id'";
} else {
    $sql = "SELECT * FROM product where ProductID='$id'";
    $qry = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($qry);
    $imageName = $row['Image'];
    $sql = "UPDATE product SET IDCaterogyProduct='$loaiSP', NameProduct='$tenSP', Amount='$soLuong', Price='$giaBanRa', Image='$imageName', ProductDetail='$chiTiet', Height='$chieuCao', Weight='$canNang', Material='$chatLieu' where ProductID='$id'";
}
$qry = mysqli_query($conn, $sql);
header('Location: ../admin.php?id=1');
