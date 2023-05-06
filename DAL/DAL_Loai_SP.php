<?php
include("./DAL/DAL_Connect.php");
$sql = "SELECT * FROM `caterogyproduct`";
$count = 1;
$result = $conn->query($sql);
if($result -> num_rows > 0){
    while ($row = $result->fetch_assoc()){
    echo "<option value=".$count++.">" .$row['NameCaterogyProduct']."</option>";
}
}
$conn->close();
?>