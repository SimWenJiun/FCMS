<?php
$message = array();;
if(count($_POST)>0) {
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$email = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_email='" . $_POST["email"] . "'");
	$username = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_username='" . $_POST["username"] . "'");
	$phone = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_phone='" . $_POST["phone"] . "'");
	$cemail  = mysqli_fetch_array($email);
	$cusername  = mysqli_fetch_array($username);
	$cphone  = mysqli_fetch_array($phone);
	if(is_array($cemail)) {
	array_push($message, "Email is taken!");
	}
	if(is_array($cusername)) {
		array_push($message, "Username is taken!");
	}
	if(is_array($cphone)) {
		array_push($message, "Phone is taken!");
	}
	if(!is_array($cemail) && !is_array($cusername) && !is_array($cphone)){
		extract($_POST);
		$update = "INSERT INTO Customers(customer_firstname, customer_lastname, customer_username, customer_phone, customer_email, customer_password, customer_address) VALUES('$fname', '$lname', '$uname', '$phone', '$email', '$pword', '$address')";
		$result = mysqli_query($conn, $update);
		header("Location:index.php");
		exit;
	}
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
		
		<div id="regbody">
			<h1>User Registration</h1>
			<p>Welcome to FoodEdge Gourmet Food Catering service. Sign up for FoodEdge Gourmet user to receive benefits. The benefits are free gifts, discounts, vouchers etc. Membership status are Silver, Gold and Platinum. Membership status will be increased through purchases of catering service. The higher membership status will gives more benefits to the user.</p>
			<form action="" method="post">
				<fieldset>
					<legend>Personal Information</legend>
					<label for="fname"><b>First Name</b></label><br>
					<input type="text" name="fname" id="fname"><br>
					
					<label for="lname"><b>Last Name</b></label><br>
					<input type="text" name="lname" id="lname"><br>
					
				</fieldset>
				
				<fieldset>
					<legend>Contact Information</legend>
					<label for="email"><b>Email</b></label><br>
					<input type="email" name="email" id="email"><br>
					
					<label for="phone"><b>Phone Number</b></label><br>
					<input type="tel" name="phone" id="phone" placeholder="+60123456789" pattern="^(\+601)[0-46-9]-*[0-9]{7,8}$"><br>
					
					<label for="address"><b>Address</b></label><br>
					<textarea name="address" id="address">Enter your address here...</textarea><br>
				</fieldset>
				
				<fieldset>
					<legend>Login Information</legend>
					<label for="uname"><b>Username</b></label><br>
					<input type="uname" name="uname" id="uname"><br>
					
					<label for="pword"><b>Password</b></label><br>
					<input type="password" name="pword" id="pword"><br>
					
					<label for="cpword"><b>Confirmed Password</b></label><br>
					<input type="password" name="cpword" id="cpword"><br>
				</fieldset>
				
				<button type="submit" id="signupbut">Sign Up</button>
				<div class="message"><?php if($message!="") { foreach ($message as $err) { echo $err, '<br/>'; } } ?></div>
			</form>
			<br>
			<br>
			<br>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>
	
</body>
</html>