<?php
include("DAL_Connect.php");
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['ProductID'] . "</td>";
    $path = "./DAL/Image_SanPham/";
    echo "<td><img src=".$path.$row['Image']." width = '100px' height = '100px'></td>";
    if ($row['IDCaterogyProduct'] == 1){
      echo "<td>" ."Mô Hình Nhân Vật". "</td>";
    } else if ($row['IDCaterogyProduct'] == 2){
      echo "<td>" ."Mô Hình Súng". "</td>";
    } else if ($row['IDCaterogyProduct'] == 3){
      echo "<td>" ."Phụ kiện". "</td>";
    } else if ($row['IDCaterogyProduct'] == 4){
      echo "<td>" ."Gấu Bông". "</td>";
    } else if ($row['IDCaterogyProduct'] == 5){
      echo "<td>" ."Đã Qua Sử Dụng". "</td>";
    } else if ($row['IDCaterogyProduct'] == 6){
      echo "<td>" ."Đồ Chơi Khác". "</td>";
    } else if ($row['IDCaterogyProduct'] == 7){
      echo "<td>" ."Mô hình Naruto". "</td>";
    } else if ($row['IDCaterogyProduct'] == 8){
      echo "<td>" ."Mô hình Dragon Ball". "</td>";
    } else if ($row['IDCaterogyProduct'] == 9){
      echo "<td>" ."Mô hình Kamen Raider". "</td>";
    } else if ($row['IDCaterogyProduct'] == 10){
      echo "<td>" ."Mô hình LOL". "</td>";
    } else if ($row['IDCaterogyProduct'] == 11){
      echo "<td>" ."Mô hình súng AR". "</td>";
    } else if ($row['IDCaterogyProduct'] == 12){
      echo "<td>" ."Mô hình súng Pistol". "</td>";
    } else if ($row['IDCaterogyProduct'] == 13){
      echo "<td>" ."Mô hình súng SMG". "</td>";
    } else if ($row['IDCaterogyProduct'] == 14){
      echo "<td>" ."Mô hình súng SR". "</td>";
    } else if ($row['IDCaterogyProduct'] == 15){
      echo "<td>" ."Mô hình súng Shotgun". "</td>";
    }else if ($row['IDCaterogyProduct'] == 16){
      echo "<td>" ."Mô hình One Peice". "</td>";
    } 
    echo "<td>" . $row['NameProduct'] . "</td>";
    echo "<td>" .$row['ProductDetail']. "</td>";
    echo "<td>" . $row['Amount'] . "</td>";
    echo "<td>" .number_format($row['Price'], 0, ',', '.') . "đ</td>";
    echo "<td>" .
      "<ul class = \"content_btn\">" .
      // nút sửa
      "<a href=''> <li class ='btn_Sua'>" .
      "<img src=\"./img/btn_Sua.png\">" .
      "</li></a>".
      // nút xóa
      "<a href='#' onclick='return confirmDelete(".$row['ProductID'].")'> <li class ='btn_Xoa'>" .
      "<img src  = \"./img/btn_Xoa.png\">" .
      "</li></a>" .
      "</ul>" .
      "</td>";
    echo "</tr>";
  }
} else {
  echo "Error!";
}
$conn->close();
?>