<link rel="stylesheet" href="../css/thongke.css">
<?php
include("DAL_Connect.php");
if (isset($_POST['from_date']) && isset($_POST['to_date'])) {
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];


    $sql = "SELECT SUM(di.Amount * di.Price) AS total_revenue
            FROM detailinvoice di
            JOIN invoice i ON di.IDInvoice = i.IDInvoice
            WHERE i.invoice_date BETWEEN '$from_date' AND '$to_date'";
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
                    "SELECT pr.ProductID,di.IDProduct,pr.Image,SUM(di.Amount * di.Price) AS total_price
                    FROM detailinvoice di
                    JOIN invoice i ON di.IDInvoice = i.IDInvoice
                    JOIN product pr ON di.IDProduct = pr.ProductID
                    WHERE i.invoice_date BETWEEN '$from_date' AND '$to_date'
                    GROUP BY pr.ProductID
                    ORDER BY total_price DESC
                    LIMIT 3";

    echo '<h2>Top sản phẩm bán chạy từ ngày ' . $from_date . ' đến ' . $to_date . '</h2>';
    // Tính toán giá trị thống kê
    $result_top = $conn->query($sql_top_product);

    if ($result_top->num_rows > 0) {
        while ($row = $result_top->fetch_assoc()) {
            echo "<tr>";
            $path = "./DAL/Image_SanPham/";
            echo "<td><img src=" . $path . $row['Image'] . " width = '200px' height = '200px'></td>";
            echo "</tr>";
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