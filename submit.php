<?php
session_start();
$message = "nah";
$test = $_COOKIE["uid"];
if (isset($_SESSION['bsqty'])) {
	$message = $test;
}
header("Location:payment.php");
?>