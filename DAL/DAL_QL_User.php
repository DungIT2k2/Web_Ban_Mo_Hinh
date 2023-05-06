<?php
include("DAL_Connect.php");
$sql = "SELECT * FROM account ORDER BY IDAccount DESC,LastName ASC";
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
    if ($row['Status'] == 1){
        echo '<td><input type="checkbox" name="confirm_user" ' . ($row['Status'] == 1 ? 'checked' : '') . ' onclick="return checkedUser()"></td>';
    }
    else{
    }
    echo "</tr>";
    }
  } else {
    echo "0 results";
  }
// if ($check == 1){
//     header('location:../index.php');
// }
$conn->close();
