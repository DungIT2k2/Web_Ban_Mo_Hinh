<?php
$phuongthuc = $_POST['phuongthuc'];
$iddh = $_POST['iddh'];
function Create_CTDH($iddh){
    include("DAL_Connect.php");
    $sql = 'SELECT * FROM donhang where IDDonHang="'.$iddh.'"';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $formatted_price = number_format($row['TongTien'], 0, ',', '.');
            echo '<div class="form_OrderDetail_item">';
            echo    '<span class="lableDetail__OrderDetail">Mã Đơn hàng: </span>';
            echo    '<span class="input_OrderDetail" id="MaDH">'.$row['IDDonHang'].'</span>';
            echo '</div>';
            echo '<div class="form_OrderDetail_item">';
            echo    '<span class="lableDetail__OrderDetail">Tên Khách Hàng:</span>';
            echo    '<span class="input_OrderDetail" id="TenKH">'.$row['TenKH'].'</span>';
            echo '</div>';
            echo '<div class="form_OrderDetail_item">';
            echo    '<span class="lableDetail__OrderDetail">SĐT:</span>';
            echo    '<span class="input_OrderDetail" id="SDT">'.$row['SDT'].'</span>';
            echo '</div>';
            echo '<div class="form_OrderDetail_item">';
            echo    '<span class="lableDetail__OrderDetail">Địa chỉ giao hàng:</span>';
            echo    '<span class="input_OrderDetail" id="DiaChi">'.$row['DiaChi'].'</span>';
            echo '</div>';
            echo '<div class="form_OrderDetail_item">';
            echo    '<span class="lableDetail__OrderDetail">Chi tiết đơn hàng:</span>';
            echo '</div>';
            echo    '<table class="Detail__OrderDetail">';
            echo        '<thead>';
            echo            '<tr>';
            echo               '<th class="column5">Sản phẩm</th>';
            echo                '<th class="column10">Số lượng</th>';
            echo                '<th class="column15">Giá</th>';
            echo                '<th class="column10">Thành Tiền</th>';
            echo            '</tr>';
            echo        '<tbody id="tbody_CTDH">';
            echo        '</tbody>';
            echo        '</thead>';
            echo '</table>';
            echo '<div class="form_OrderDetail_item labelDetail_TongTien">';
            echo    '<span class="lableDetail__OrderDetail" >Tổng tiền:</span>';
            echo    '<span class="input_OrderDetail" id="TongTien">'.$formatted_price.'đ</span>';
            echo '</div>';
            echo '<div class="form_OrderDetail_item">';
            if ($row['TrangThai'] == 1){
                echo   '<button class="btn_confirm_DH" disabled>Đã Xác Nhận</button>';
            }
            else{
                echo   '<button class="btn_confirm_DH" onclick="Confirm_DH()">Xác Nhận</button>';
            }
            echo '</div>';
        }
    }
}
function GetCTDH($iddh){
    include("DAL_Connect.php");
    $sql = 'SELECT sp.NameProduct,ctdh.SoLuong,sp.Price FROM ctdonhang ctdh JOIN product sp on ctdh.ProductID = sp.ProductID WHERE ctdh.IDDonHang="'.$iddh.'"';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $price = $row['SoLuong']*$row['Price'];
            $formatted_price = number_format($row['Price'], 0, ',', '.');
            $formatted_price_total = number_format($price, 0, ',', '.');
            echo "<tr>";
            echo "<td style = "."font-weight:600;".">" . $row['NameProduct'] . "</td>";
            echo "<td>" . $row['SoLuong'] . "</td>";
            echo "<td>" . $formatted_price . "đ</td>";
            echo "<td>" . $formatted_price_total . "đ</td>";
            echo "</tr>";
        }
    }
}
function CheckedUser($iddh){
    include("DAL_Connect.php");
    $sql = 'UPDATE donhang SET TrangThai="1" WHERE IDDonHang="' . $iddh . '"';
    if ($conn->query($sql)){
        echo 1;
    }
    else{
        echo 0;
    }
    mysqli_close($conn);
}
function Confirm_DH($iddh){
    include("DAL_Connect.php");
    $sql = 'UPDATE donhang SET TrangThai="1" WHERE IDDonHang="' . $iddh . '"';
    if ($conn->query($sql)){
        echo 1;
    }
    else{
        echo 0;
    }
    mysqli_close($conn);
}
if ($phuongthuc == "tao"){
    Create_CTDH($iddh);
}
if ($phuongthuc == "get"){
    GetCTDH($iddh);
}
if ($phuongthuc == "checkeduser"){
    CheckedUser($iddh);
}
if ($phuongthuc == "confirmuser"){
    Confirm_DH($iddh);
}
?>