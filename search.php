<?php 
    session_start();

    include("./DAL_Connect.php");
    $searchText = $_GET["searchText"];


    $searchText = mysqli_real_escape_string($conn, $searchText);
    $sql = "SELECT * FROM product WHERE column LIKE '%$searchText%'";

    // Execute the query and retrieve the matching rows
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // Output the matching rows as HTML
      while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
      }
    } else {
      echo "No results found";
    }
    
    // Close the database connection
    $conn->close();
?>