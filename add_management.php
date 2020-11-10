<?php
session_start();
$message="";
$totalamt = 0;
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$musername = mysqli_query($conn,"SELECT * FROM Management WHERE username='" . $_POST["uname"] . "'");
	$mcheck  = mysqli_fetch_array($musername);
	if(is_array($mcheck)) {
	array_push($message, "Username is taken!");
	}
	if(!is_array($mcheck)){
		extract($_POST);
		$update = "INSERT INTO Management(username, password) VALUES('$uname', '$pword')";
		$result = mysqli_query($conn, $update);
		header("Location:management_home.php");
		exit;
	}
?>