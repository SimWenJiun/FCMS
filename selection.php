<?php
session_start();
$_SESSION['bsqty'] = $_POST['bsqty'];
$_SESSION['lsaqty'] = $_POST['lsaqty'];
$_SESSION['lsbqty'] = $_POST['lsbqty'];
$_SESSION['lscqty'] = $_POST['lscqty'];
$_SESSION['dsaqty'] = $_POST['dsaqty'];
$_SESSION['botdqty'] = $_POST['botdqty'];
header("Location:submitbooking.php");
?>