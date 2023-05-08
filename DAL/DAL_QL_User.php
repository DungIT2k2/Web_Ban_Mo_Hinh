<?php

include("DAL_Connect.php");
$sql = "SELECT * FROM account ORDER BY IDAccount ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['IDAccount'] . "</td>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Password'] . "</td>";
    echo "<td>" . $row['Role'] . "</td>";
    echo '<td><input type="checkbox" id="'.$row['IDAccount'].'" ' . ($row['Status'] == 1 ? 'checked' : '') . ' onclick="checkedUser('.$row['IDAccount'].')"></td>';
    echo "</tr>";
    }
  } else {
    echo "0 results";
  }
$conn->close();
?>