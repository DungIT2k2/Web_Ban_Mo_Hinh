<link rel="stylesheet" href="../css/thongke.css">
<?php
include("DAL_Connect.php");
if (isset($_POST['product_type']) && isset($_POST['from_date']) && isset($_POST['to_date'])) {
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $product_type = $_POST['product_type'];

    if ($product_type == 'all') {
    $sql = "SELECT SUM(dh.TongTien) AS total_revenue
            FROM ctdonhang ctdh
            JOIN donhang dh ON ctdh.IDDonHang = dh.IDDonHang 
            WHERE dh.NgayDat BETWEEN '$from_date' AND '$to_date'";
    } else {
         $sql = "SELECT pr.NameProduct, SUM(dh.TongTien) AS total_revenue
            FROM ctdonhang ctdh
            JOIN donhang dh ON ctdh.IDDonHang = dh.IDDonHang 
            JOIN product pr ON ctdh.ProductID = pr.ProductID
            JOIN caterogyproduct ca ON ca.IDCaterogyProduct = pr.IDCaterogyProduct
            WHERE ca.NameCaterogyProduct = '$product_type' AND dh.NgayDat BETWEEN '$from_date' AND '$to_date'";
    }
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $total_revenue = $row['total_revenue'];
    } else {
        $total_revenue = 0;
    }

    echo '<div>';
    echo '<h2>Tổng doanh thu từ ngày ' . $from_date . ' đến ' . $to_date . '</h2>';
    echo '<p>' . number_format($total_revenue) . ' VNĐ</p>';
    echo '</div>';

    $sql_top_product = 
                    "SELECT pr.ProductID,pr.NameProduct,ctdh.ProductID,pr.Image,SUM(dh.TongTien) AS total_price
                    FROM ctdonhang ctdh
                    JOIN donhang dh ON ctdh.IDDonHang = dh.IDDonHang 
                    JOIN product pr ON ctdh.ProductID = pr.ProductID
                    WHERE dh.NgayDat BETWEEN '$from_date' AND '$to_date'
                    GROUP BY pr.ProductID
                    ORDER BY total_price DESC
                    LIMIT 3
                    ";

    echo '<h2>Top sản phẩm bán chạy từ ngày ' . $from_date . ' đến ' . $to_date . '</h2>';
    // Tính toán giá trị thống kê
    $result_top = $conn->query($sql_top_product);

    if ($result_top->num_rows > 0) {
        $i = 1;
        while ($row = $result_top->fetch_assoc()) {
            echo "<tr>";
            $path = "./DAL/Image_SanPham/";
            echo "<td><div class=product_top>Top :  $i  </div></td>";
            echo '<td><div class="product_top_name">Name :' . $row['NameProduct'] . '</div></td>';
            echo "<td><div class=product_top_image><img src=" . $path . $row['Image'] . " width = '200px' height = '200px'></div></td>";
            echo "</tr>";
            $i++;
        }
    } else {
        echo "";
    }
    // Đóng kết nối
}else{
    echo "";
}
$conn->close();

?>