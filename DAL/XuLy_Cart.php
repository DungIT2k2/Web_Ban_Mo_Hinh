<?php
session_start();

if(isset($_POST['ProductID'])) {
    $productid = $_POST['ProductID'];
    
}

if(isset($_POST['SoLuong'])) {
    $soluong = $_POST['SoLuong'];    
}

if(isset($_POST['newsoluong'])) {
    $newsoluong = $_POST['newsoluong'];    
}
if(isset($_POST['PhuongThuc'])) {
    $phuongthuc = $_POST['PhuongThuc'];    
}

function add($productid, $soluong)
{
    $check = checkAmountproduct($productid,$soluong);
    if ($check == 0){
        $_SESSION['Cart'][$productid] = $soluong;

    }
    else {
        echo 1;
    }
}

function edit($productid, $newsoluong){
    $check = checkAmountproduct($productid,$newsoluong);
    if ($check == 0){
        if(isset($_SESSION['Cart'][$productid])) {
            $_SESSION['Cart'][$productid] = $newsoluong;
        }
    }
    else{
        echo 1;
    }
}

function show()
{
    include("./DAL_Connect.php");
    global $path;
    $tongtien =0;
    $path = "./DAL/Image_SanPham/";
    $check = false;
    if(isset($_SESSION['Cart'])){
        foreach ($_SESSION['Cart'] as $key => $value) {
            $sql = "Select * From product where ProductID='" . $key. "'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $check = true;
                while ($row = $result->fetch_assoc()) {
                    $price = $row['Price']*$value;
                    $formatted_price = number_format($price, 0, ',', '.');
                    $srcImg = $path . $row['Image'];
                    echo '<div class = idQuantity>'.$row["ProductID"].'</div>';
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
                    $tongtien += ($value*$row['Price']);
                }
            }
        }
        if($check == true){
        echo '<div class="cart__footer">';
        echo '<div class="cart__total">';
        echo '<div class="cart__total__title">Tổng tiền:</div>';
        echo '<p class="order_tongtien">'.number_format($tongtien, 0, ',', '.').'đ</p>';
        echo '<div class="hidden">'.$tongtien.'</div>';
        echo '</div>';
        echo '<button onclick="Order()" class="cart__btnOrder">Đặt Hàng</button>';
        }
    }
    mysqli_close($conn);
}

function countCart(){
    include("./DAL_Connect.php");
    global $path;
    $count = 0;
    $path = "./DAL/Image_SanPham/";
    if(isset($_SESSION['Cart'])){
        foreach ($_SESSION['Cart'] as $key => $value) {
                $count += 1;
        }
    }
    echo $count;
}

function Order($tongtien){
    $check_DN = checkdangnhap();
    if ($check_DN == 0){
        echo 1;
    }
    else{
        $check_tt = checkthongtin();
        if ($check_tt == 0){
            echo 2;
        }
        else{
            include("./DAL_Connect.php");
            $sql = 'SELECT MAX(IDDonHang) FROM donhang';
            $date = date('Y-m-d');
            $sql = 'INSERT INTO donhang (IDDonHang, IDAccount, TenKH, DiaChi, SDT, NgayDat, TongTien, TrangThai) VALUES (NULL,"'.$_SESSION['login']['id'].'","'.$_SESSION['login']['name'].'","'.$_SESSION['login']['diachi'].'","'.$_SESSION['login']['sdt'].'","'.$date.'","'.$tongtien.'","0")';
            if ($conn->query($sql) == true){
                DetailOrder();
            }
            mysqli_close($conn);
        }
    }
}
function DetailOrder(){
    include("./DAL_Connect.php");
    $check = false;
    $sql = 'SELECT MAX(IDDonHang) FROM donhang';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $iddonhang = $row['MAX(IDDonHang)'];
        }
    }
    if(isset($_SESSION['Cart'])){
        foreach ($_SESSION['Cart'] as $key => $value) {
            $sql = 'INSERT INTO ctdonhang (IDCTDonHang, IDDonHang, ProductID, SoLuong) VALUES (NULL,"'.$iddonhang.'","'.$key.'","'.$value.'")';
            if($conn->query($sql)){
                $check = true;
                $sql='Select Amount From product where ProductID="'.$key.'"';
                $result = $conn->query($sql);
                if ($result -> num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        $amount = $row['Amount'];
                        $amount_current = $amount - $value;
                    }
                    $sql='Update product SET Amount="'.$amount_current.'" where ProductID="'.$key.'"';
                    $conn -> query($sql);
                }
            }   
            else{
                $check = false;
                break;
            }
        }
    }
    if($check == true){
        unset($_SESSION['Cart']);
        echo 0;
    }
}
function checkAmountproduct($productid,$soluong_current){
    include("./DAL_Connect.php");
    $sql='Select Amount From product where ProductID="'.$productid.'"';
    $result = $conn->query($sql);
    if ($result -> num_rows > 0){
        while ($row = $result->fetch_assoc()){
            if ($row['Amount'] < $soluong_current){
                return 1;
            }
        }
    }
    return 0;
}
function checkdangnhap(){
    if (isset($_SESSION['login']['id'])){
        return 1;
    }
    return 0;
}
function checkthongtin(){
    if (isset($_SESSION['login']['diachi']) && isset($_SESSION['login']['sdt'])){
        if($_SESSION['login']['diachi'] == "" || $_SESSION['login']['sdt'] == ""){
            return 0;
        }
        else{
            return 1;
        }
    }
}
if(isset($phuongthuc)) {
    if ($phuongthuc == "add") {
        add($productid, $soluong);
    }
    if ($phuongthuc == "show") {    
        show();
    }
    if ($phuongthuc == "count") {    
        countCart();
    }
    if ($phuongthuc == "editsoluong") {    
        edit($productid, $newsoluong);
    }
    if ($phuongthuc == "order"){
        Order($_POST['tongtien']);
    }
}
