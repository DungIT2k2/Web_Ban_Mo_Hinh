<?php session_start();
ob_start();
 unset($_SESSION['login']);
 header('Location:./index.php');
?>
