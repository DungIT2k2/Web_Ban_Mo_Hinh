<?php
include("./DAL/DAL_Connect.php");
$sql = "SELECT * FROM `caterogyproduct` WHERE IDCaterogyProduct IN ('2','11', '12', '13', '14', '15')";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo "<option value=" . $row["IDCaterogyProduct"] . ">" . $row['NameCaterogyProduct'] . "</option>";
            
            }
    }
$conn->close();
