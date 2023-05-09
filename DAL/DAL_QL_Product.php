<?php
include("DAL_Connect.php");

$sortField = $_GET['sortField'];
$sortOrder = $_GET['sortOrder'];

if ($sortField == 'Price') {
  $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct ORDER BY Price " . $sortOrder;
} elseif ($sortField == 'Amount') {
  $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct ORDER BY Amount " . $sortOrder;
} else {
  $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct";
}

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['ProductID'] . "</td>";
    $path = "./DAL/Image_SanPham/";
    echo "<td><img src=".$path.$row['Image']." width = '100px' height = '100px'></td>";
    echo "<td>" . $row['NameCaterogyProduct'] . "</td>";
    echo "<td>" . $row['NameProduct'] . "</td>";
    echo "<td>" .$row['ProductDetail']. "</td>";
    echo "<td>" . $row['Amount'] . "</td>";
    echo "<td>" .number_format($row['Price'], 0, ',', '.') . "đ</td>";
    echo "<td>" .
      "<ul class = \"content_btn\">" .
      // nút sửa
      "<a href=''> <li class ='btn_Sua' onclick=\"xemThongTinSPtheoID(".$row["ProductID"].")\">" .
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