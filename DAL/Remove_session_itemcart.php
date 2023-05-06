<?php
session_start();
ob_start();
$id = $_POST['ProductID'];
unset($_SESSION['Cart'][$id]);
?>