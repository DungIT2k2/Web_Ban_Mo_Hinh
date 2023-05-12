<?php
include("DAL_Connect.php");
  $sql = 'SELECT * FROM `donhang` WHERE IDAccount="'.$_POST['id'].'"';
  $result = $conn->query($sql);
  $stt=1;
  if ($result->num_rows > 0) {
      // output data of each row
      echo '<table class="tb_dondadat">
        <thead>
            <tr>
                <th class="column5">STT</th>
                <th class="column10">Địa Chỉ Giao Hàng</th>
                <th class="column15">SĐT Người Nhận</th>
                <th class="column10">Ngày Đặt Hàng</th>
                <th class="column15">Tổng tiền</th>
                <th class="column10">Trạng Thái</th>
                <th class="column10">Thao Tác</th>
            </tr>
        <tbody class="tbody_dondadat">';
      while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $stt. "</td>";
      echo "<td>" . $row['DiaChi'] . "</td>";
      echo "<td>" . $row['SDT'] . "</td>";
      echo "<td>" . $row['NgayDat'] . "</td>";
      echo "<td>" . $row['TongTien'] . "</td>";
      echo "<td>" . ($row['TrangThai'] == 1 ? 'Đã Giao' : 'Chưa Giao') .'</td>';
      echo '<td><div class="xemct_dondadat" onclick="XemChiTiet_Dondadat('.$row['IDDonHang'].')">Xem Chi Tiết</div></td>';
      echo "</tr>";
      $stt++;
      }
      echo "</tbody>";
      echo "</thead>";
      echo "</table>";
    } else {
      echo "0";
    }
$conn->close();
?>
