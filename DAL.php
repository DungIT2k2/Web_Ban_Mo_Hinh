<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "Select * From student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "1." .$row["name"]."<br>";
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>

