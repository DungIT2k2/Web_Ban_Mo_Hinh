<?php 
    include("DAL_Connect.php");
    // $ID  = $_POST['ID_addSP'];
    $ID = NULL;

    $Image = $_FILES["image_input"]["name"];
    $tmp_Image = $_FILES["image_input"]["tmp_name"];
    

    $IDCaterogyProduct = $_POST['product_type_selected'];
    $Name = $_POST['tenSP_addSP'];
    $Amount = $_POST['soluongSP_addSP'];
    $Price = $_POST['giaSP_addSP'];
    $ProductDetail = $_POST['ChiTiet'];
    $Height = $_POST['heightSP_addSP'];
    $Weight = $_POST['weightSP_addSP'];
    $Material = $_POST['materialSP_addSP'];

    $sql = "INSERT INTO  product (ProductID, IDCaterogyProduct, NameProduct, Amount, Price, Image, ProductDetail, Height, Weight, Material) 
    Values ('$ID', '$IDCaterogyProduct', '$Name', '$Amount', '$Price', '$Image', '$ProductDetail','$Height','$Weight','$Material')";
    $qry = mysqli_query($conn, $sql);
    move_uploaded_file($tmp_Image, '../DAL/Image_SanPham/'.$Image);
    header('Location: ../admin.php?id=1');
?>