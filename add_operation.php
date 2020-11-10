<?php
session_start();
$message="";
$totalamt = 0;
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$ousername = mysqli_query($conn,"SELECT * FROM Operation WHERE username='" . $_POST["uname"] . "'");
	$ocheck  = mysqli_fetch_array($ousername);
	if(is_array($ocheck)) {
	array_push($message, "Username is taken!");
	}
	if(!is_array($ocheck)){
		extract($_POST);
		$update = "INSERT INTO Operation(username, password) VALUES('$uname', '$pword')";
		$result = mysqli_query($conn, $update);
		header("Location:management_home.php");
		exit;
	}
?>