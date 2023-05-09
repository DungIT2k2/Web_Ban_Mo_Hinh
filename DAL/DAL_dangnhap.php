<?php
session_start();
$email = $_POST['username'];
$password_current = $_POST['password'];
include("DAL_Connect.php");
$sql = "SELECT IDAccount,Password,Role,FirstName,LastName,DiaChi,SDT,Status FROM account WHERE Email='$email';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $pass = $row["Password"];
    $role = $row["Role"];
    $status = $row["Status"];
    if (strcmp($pass, $password_current) == 0) {
      if ($status == 0){
        echo 4;
      }else{
        if (strcmp($role, "Admin") == 0 || strcmp($role, "Manager") == 0 || strcmp($role, "Employee") == 0) {
          $_SESSION['login']['id'] = $row["IDAccount"];
          $_SESSION['login']['diachi'] = $row["DiaChi"];
          $_SESSION['login']['sdt'] = $row["SDT"];
          $_SESSION['login']['role'] = $role;
          $_SESSION['login']['name'] = $row["FirstName"] . " " . $row["LastName"];
        echo 1;
        } else {
          $_SESSION['login']['id'] = $row["IDAccount"];
          $_SESSION['login']['diachi'] = $row["DiaChi"];
          $_SESSION['login']['sdt'] = $row["SDT"];
          $_SESSION['login']['role'] = $role;
          $_SESSION['login']['name'] = $row["FirstName"] . " " . $row["LastName"];
          echo 2;
        }
      }
    } else {
      echo 3;
    }
  }
} else {
  echo 3;
}
$conn->close();
?>
