<?php
session_start();
$message="";
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$email = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_email='" . $_POST["email"] . "'");
	$cemail = mysqli_fetch_array($email);
	if(is_array($cemail)) {
		$recipientEmail = $cemail[5];
		$emailSubject = "FoodEdge Reset Password";
		$emailContext = "Your FoodEdge account details are as below: \n Username: '" . $cemail[3] . "' \n Password: '" . $cemail[6] . "'";
		mail($recipientEmail, $emailSubject, $emailContext);
		header("Location:login.php");
		exit;
	} else {
		$message = "Email not found!";
	}
?>