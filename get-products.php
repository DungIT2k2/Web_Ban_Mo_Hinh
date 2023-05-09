<?php
    include("./DAL/DAL_Connect.php");
    $sql = "SELECT IDCaterogyProduct,NameCaterogyProduct FROM caterogyproduct";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['NameCaterogyProduct'] . '">' . $row['NameCaterogyProduct'] . '</option>';
        }
    }
    $conn->close();
?> 