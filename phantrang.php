<?php
include("../web_2/DAL/DAL_Connect.php");
// Lấy trang hiện tại
$page = $_GET['page'];

$limit = 6; // Số bản ghi trên mỗi trang
$offset = ($page - 1) * $limit;

$query = "SELECT * FROM product LIMIT $offset, $limit";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Hiển thị danh sách sản phẩm
global $path;
global $soluong;
$path = "./DAL/Image_SanPham/";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $srcImg = $path . $row['Image'];
        echo "<div class=\"container__row-card\" onclick=\"showItemDetail('" . $row['NameProduct'] . "', " . $row['Amount'] . ",'" . $row['CharacterName'] . "', '" . $row['AnimeOrManga'] . "', '" . $row['Height'] . "', '" . $row['Weight'] . "', '" . $row['Material'] . "', '" . $row['ProductDetail'] . "', '" . $srcImg . "', " . $row['Price'] . ")\">";
        echo "<div class=\"product__price-2-percent\">";
        echo "<p>10%";
        echo "<p>";
        echo "</div>";
        echo "<img src=\"" . $path . $row['Image'] . "\" class=\"product-image\">";
        echo "<div id = \"name_product\" class=\"container__row-card-title\" data-name=\"" . $row['NameProduct'] . "\">" . $row['NameProduct'] . "</div>";
        echo "<div class=\"card__footer\">";
        $price_mutiple_10perent = doubleval($row['Price']) * 0.1;
        $price_before_discount_10percent = $row['Price'] + $price_mutiple_10perent;
        echo "<div class=\"card__item__Price\">" . $price_before_discount_10percent . "</div>";
        echo "<div class=\"container__row-card-price\">" . $row['Price'] . "</div>";
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Không có sản phẩm!";
}

// Đóng kết nối
mysqli_close($conn);
?>