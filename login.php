<?php
session_start();
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$result = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_username='" . $_POST["uname"] . "' and customer_password = '". $_POST["pword"]."'");
	$operation = mysqli_query($conn,"SELECT * FROM Operation WHERE username='" .$_POST["uname"]."' and password = '" .$_POST["pword"]."'");
	$management = mysqli_query($conn,"SELECT * FROM Management WHERE username='" .$_POST["uname"]."' and password = '" .$_POST["pword"]."'");
	$row  = mysqli_fetch_array($result);
	$op = mysqli_fetch_array($operation);
	$mng = mysqli_fetch_array($management);
	if(is_array($row)) {
		$_SESSION["id"] = $row["customer_id"];
		$_SESSION["email"] = $row["customer_email"];
		$_SESSION["username"] = $row["customer_username"];
		$_SESSION["phone"] = $row["customer_phone"];
	} else if (is_array($op)) {
		$_SESSION["operation"] = $op["operation_id"];
	} else if (is_array($mng)) {
		$_SESSION["management"] = $mng["management_id"];
	} else {
		$message = "Invalid Username or Password!";
	}
}
if(isset($_SESSION["id"])) {
	header("Location:profile.php");
	exit;
} else if(isset($_SESSION["operation"])) {
	header("Location:operation_dashboard.php");
	exit;
} else if(isset($_SESSION["management"])) {
	header("Location:management_profile.php");
	exit;
}
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Login"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Login</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body">
			<div id="loginbox">
				<h1>User Login</h1>
				<img src="img/avatar.png" alt="User avatar" id="avatar">
				<form action="" method="post">
					<label for="login"><b>Username</b></label>
					<input type="text" name="uname" id="login">
					
					<label for="password"><b>Password</b></label>
					<input type="password" name="pword" id="password">
					
					<button type="submit" id="loginbut">Login</button>
					<span id="forgot"><a href="reset.php">Forgot password?</a></span>
					
				</form>
				<button id="signup"><a href="registration.php">Sign Up</a></button>
				<div class="message"><?php if($message!="") { echo $message; } ?></div>
			</div>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>
	
</body>
</html>