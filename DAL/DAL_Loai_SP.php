<?php
include("./DAL/DAL_Connect.php");
$sql = "SELECT * FROM `caterogyproduct`";
$result = $conn->query($sql);
echo '<option value="0">Tất Cả</option>';
if($result -> num_rows > 0){
    while ($row = $result->fetch_assoc()){
    echo "<option value=".$row['IDCaterogyProduct'].">" .$row['NameCaterogyProduct']."</option>";
}
}
$conn->close();
?>