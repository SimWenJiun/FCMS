<?php
session_start();
$message = array();;
$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
$id = $_SESSION["id"];
$email = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_email='" . $_POST["email"] . "'");
$username = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_username='" . $_POST["uname"] . "'");
$phone = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_phone='" . $_POST["phone"] . "'");
$cemail  = mysqli_fetch_array($email);
$cusername  = mysqli_fetch_array($username);
$cphone  = mysqli_fetch_array($phone);
if(is_array($cemail)) {
	array_push($message, "Email is taken!");
	header("Location:profile.php");
	exit;
}
if(is_array($cusername)) {
	array_push($message, "Username is taken!");
	header("Location:profile.php");
	exit;
}
if(is_array($cphone)) {
	array_push($message, "Phone is taken!");
	header("Location:profile.php");
	exit;
}
if(!is_array($cemail) && !is_array($cusername) && !is_array($cphone)){
	extract($_POST);
	$update = "UPDATE Customers SET customer_firstname = '$fname', customer_lastname = '$lname', customer_username = '$uname', customer_phone = '$phone', customer_email = '$email', customer_password = '$pword', customer_address = '$address' WHERE customer_id = '$id'";
	$result = mysqli_query($conn, $update);
	header("Location:profile.php");
	exit;
}

?>