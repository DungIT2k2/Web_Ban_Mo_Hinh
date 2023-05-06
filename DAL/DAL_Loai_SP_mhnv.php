<?php
include("./DAL/DAL_Connect.php");
$sql = "SELECT * FROM `caterogyproduct` WHERE IDCaterogyProduct IN ('1','7','8','9','10', '3', '4', '16')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value=" . $count++ . ">" . $row['NameCaterogyProduct'] . "</option>";
    }
}
$conn->close();
?>