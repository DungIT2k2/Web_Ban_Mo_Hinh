<?php
// $ID  = $_POST['ID_addSP'];
$IDCaterogyProduct = $_POST['product_type_selected'];
$Name = $_POST['tenSP_addSP'];
$Amount = $_POST['soluongSP_addSP'];
$Price = $_POST['giaSP_addSP'];
$ProductDetail = $_POST['ChiTiet'];
if ($_POST['nvSP_addSP'] == "") {
    $_POST['nvSP_addSP'] = "None!!!";
}
$CharacterName = $_POST['nvSP_addSP'];
$AnimeOrMangaOrGameFPS = $_POST['animeSP_addSP'];
$Height = $_POST['heightSP_addSP'];
$Weight = $_POST['weightSP_addSP'];
$Material = $_POST['materialSP_addSP'];


// tạo file uploads trên server (C:\xampp\htdocs\web_2\DAL)
// $uploadDir = 'uploads/';  // tên của file muốn tạo
// if (!file_exists($uploadDir)) {
//     mkdir($uploadDir, 0777, true); // tạo thư mục uploads với quyền truy cập 0777
// }

$target_dir = "Image_SanPham/";
$target_file = $target_dir . basename($_FILES["image_input"]["name"]);

if (move_uploaded_file($_FILES["image_input"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["image_input"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
$Image = $_FILES["image_input"]["name"];

include("DAL_Connect.php");

$sql = "INSERT INTO  product (ProductID, IDCaterogyProduct, NameProduct, Amount, Price, Image, ProductDetail, CharacterName, AnimeOrMangaOrGameFPS, Height, Weight, Material) 
    Values (NULL, '$IDCaterogyProduct', '$Name', '$Amount', '$Price', '$Image', '$ProductDetail','$CharacterName','$AnimeOrMangaOrGameFPS','$Height','$Weight','$Material')";
if ($conn->query($sql) === true) {
    echo "<script type = 'text/javascript'> alert('Thêm sản phẩm thành công !!!');</script>";
    Header('Location: ../admin.php?id=1');
}
$conn->close();
