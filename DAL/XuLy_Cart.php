
<?php
session_start();

if(isset($_POST['ProductID'])) {
    $productid = $_POST['ProductID'];
    
}
if(isset($_POST['SoLuong'])) {
    $soluong = $_POST['SoLuong'];    
}
$phuongthuc = $_POST['PhuongThuc'];

function add($productid, $soluong)
{
    $_SESSION['Cart'][$productid] = $soluong;
}
function show()
{
    include("./DAL_Connect.php");
    global $path;
    global $soluong;
    $path = "./DAL/Image_SanPham/";
    foreach ($_SESSION['Cart'] as $key => $value) {
        $sql = "Select * From product where ProductID='" . $key. "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $price = $row['Price'];
                $formatted_price = number_format($price, 0, ',', '.');
                $srcImg = $path . $row['Image'];
                echo '<div class="cart__item">';
                echo "<img class=\"cart__item__img\" src=\"" . $path . $row['Image'] . "\" />";
                echo '<div class="cart__item_content">';
                echo '<div class="cart__item__title">';
                echo $row['NameProduct'];
                echo '</div >';
                echo '<div class="cart__item__quantity">';
                echo '<button class="cart__btn-down">';
                echo '<img ';
                echo 'src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-remove.svg"';
                echo 'alt="remove-icon"';
                echo '/>';
                echo '</button>';
                echo "<input type=\"text\" class=\"cart__input\" value=\"$value\"/>";
                echo '<button class="cart__btn-up">';
                echo '<img ';
                echo 'src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-add.svg"';
                echo 'alt="add-icon"';
                echo '/>';
                echo '</button>';
                echo '</div>';
                echo '';
                echo "<div class=\"cart__item__price\">" . $formatted_price . " đ" . "</div>";
                echo '';
                echo '</div>';
                echo '<div class="cart__item__trash" onclick="deleteItem(' . $key . ')">';
                echo '<i class="fa-solid fa-trash"></i>';
                echo '</div>';
                echo '</div>';
            }
        }
    }
}
if ($phuongthuc == "add") {
    add($productid, $soluong);
}
if ($phuongthuc == "show") {
    show();
}
?>
