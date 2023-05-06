<?php
include("DAL_Connect.php");
$idquyen = $_POST['idquyen'];
$sql = "SELECT * FROM phanquyen WHERE IDQuyen=$idquyen";
$result = $conn->query($sql);
$count = 1;
$stt = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $stt . "</td>";
    echo "<td>" . $row['KhuVucQuanLi'] . "</td>";
    echo "<td><input type=\"checkbox\" name=".$row['KhuVucQuanLi'].' id="'.$row['IDQuyen'].'" ' .($row['Them'] == 1 ? 'checked' : '') . "></td>";
    echo "<td><input type=\"checkbox\" name=".$row['KhuVucQuanLi']. ($row['Xoa'] == 1 ? ' checked' : '') . "></td>";
    echo "<td><input type=\"checkbox\" name=".$row['KhuVucQuanLi']. ($row['Sua'] == 1 ? ' checked' : '') . "></td>";
    echo "<td><input type=\"checkbox\" name=".$row['KhuVucQuanLi']. ($row['Xem'] == 1 ? ' checked' : '') . "></td>";
    echo "</tr>";
    $stt++; 
    }
}
$conn->close();
?>