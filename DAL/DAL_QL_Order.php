<?php
include("DAL_Connect.php");
if (isset($_POST['from_date']) && isset($_POST['to_date'])) {
      $from_date = $_POST['from_date'];
      $to_date = $_POST['to_date'];

  $sql = "SELECT * FROM `donhang` WHERE NgayDat BETWEEN '$from_date' AND '$to_date'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['IDDonHang'] . "</td>";
      echo "<td>" . $row['TenKH'] . "</td>";
      echo "<td>" . $row['DiaChi'] . "</td>";
      echo "<td>" . $row['SDT'] . "</td>";
      echo "<td>" . $row['NgayDat'] . "</td>";
      echo "<td>" . $row['TongTien'] . "</td>";
      echo '<td><input type="checkbox" name="confirm_user" ' . ($row['TrangThai'] == 1 ? 'checked disabled' : '') . ' onclick="checkedUser('.$row['IDDonHang'].')"></td>';
      echo '<td><div class="xemct" onclick="XemChiTiet('.$row['IDDonHang'].')">Xem Chi Tiết</div></td>';
      echo "</tr>";
      }
    } else {
      echo "0 results";
    }
}
$conn->close();
?>

