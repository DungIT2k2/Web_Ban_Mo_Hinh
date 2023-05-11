<?php
include("DAL_Connect.php");

if (isset($_GET['sortField']) && isset($_GET['sortOrder'])) {
    $sortField = $_GET['sortField'];
    $sortOrder = $_GET['sortOrder'];
    if ($sortField == 'Price') {
        $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct ORDER BY Price " . $sortOrder;
    } elseif ($sortField == 'Amount') {
        $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct ORDER BY Amount " . $sortOrder;
    }
} else {
    $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct";
}

$qry = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($qry)) { ?>
    <tr>
        <td>
            <?php echo $row['ProductID'] ?>
        </td>
        <td>
            <img src="./DAL/Image_SanPham/<?php echo $row['Image'] ?>" alt="" width='100px' height='100px'>
        </td>
        <td> <?php echo $row['NameCaterogyProduct'] ?></td>
        <td>
            <?php echo $row['NameProduct'] ?>
        </td>
        <td>
            <?php echo $row['ProductDetail'] ?>
        </td>
        <td style="font-size: 20px;">
            <?php echo $row['Amount'] ?>
        </td>
        <td style="font-size: 20px;">
            <?php echo number_format($row['Price'], 0, ',', '.') ?>đ
        </td>
        <td>
            <ul class="content_btn">
                <!-- Nút sửa sản phẩm -->
                <li class="btn_Sua" onclick="xemThongTinSPtheoID('<?php echo $row['ProductID']; ?>', '<?php echo $row['IDCaterogyProduct']; ?>', 'DAL/Image_SanPham/<?php echo $row['Image']; ?>', '<?php echo $row['NameProduct']; ?>', '<?php echo $row['ProductDetail']; ?>', '<?php echo $row['Amount']; ?>', '<?php echo $row['Price']; ?>', '<?php echo $row['Height']; ?>', '<?php echo $row['Weight']; ?>', '<?php echo $row['Material']; ?>')">
                    Sửa <!-- <img src="./img/btn_Sua.png"> -->
                </li>
                <!-- Nút xóa sản phẩm -->
                <li class="btn_Xoa" onclick="confirmDelete('<?php echo $row['ProductID']; ?>')"> Xóa
                </li>
            </ul>
        </td>
        <?php
        ?>
    </tr>
<?php }
?>