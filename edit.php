<?php
session_start();
$message = "";
$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
$id = $_SESSION["id"];
$sname = $_SESSION["username"];
$semail = $_SESSION["email"];
$sphone = $_SESSION["phone"];
$email = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_email='" . $_POST["email"] . "'");
$username = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_username='" . $_POST["uname"] . "'");
$phone = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_phone='" . $_POST["phone"] . "'");
$cemail  = mysqli_fetch_array($email);
$cusername  = mysqli_fetch_array($username);
$cphone  = mysqli_fetch_array($phone);
if($cusername[3] === $sname || $cemail[5] === $semail || $cphone[4] === $sphone || (!is_array($cemail) && !is_array($cusername) && !is_array($cphone))){
	extract($_POST);
	$update = "UPDATE Customers SET customer_firstname = '$fname', customer_lastname = '$lname', customer_username = '$uname', customer_phone = '$phone', customer_email = '$email', customer_password = '$pword', customer_address = '$address' WHERE customer_id = '$id'";
	$result = mysqli_query($conn, $update);
	header("Location:profile.php");
	exit;
} else{
	$message = "Profile can't be updated!";
}

?>