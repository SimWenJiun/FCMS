<?php
$message = "";
if(count($_POST)>0) {
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$result = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_email='" . $_POST["email"] . "' and customer_username = '". $_POST["uname"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
		$message = "Username or Email is already in use!";
	} else {
		extract($_POST);
		$update = "INSERT INTO Customers(customer_firstname, customer_lastname, customer_username, customer_phone, customer_email, customer_password, customer_address) VALUES('$fname', '$lname', '$uname', '$phone', '$email', '$pword', '$address')";
		$result = mysqli_query($conn, $update);
		header("Location:index.html");
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
		<header>
			<div id="logoholder"><a href="home.html"><img src="img/Logo.jpg" alt="FoodEdge Gourmet" id="logo"/></a></div>
			
			<div id="navigation">
				<div id="home"><a href="home.html">Home</a></div>
				
				<div id="menu">
					<ul>
						<li><a href="menupage.html">Food & Beverages Menu</a>
							<ul>							
								<li><a href="breakfastset.html">Breakfast Set</a></li>
								<li><a href="lunchseta.html">Lunch Set A</a></li>
								<li><a href="lunchsetb.html">Lunch Set B</a></li>
								<li><a href="lunchsetc.html">Lunch Set C</a></li>
								<li><a href="dinnerseta.html">Dinner Set A</a></li>
								<li><a href="beverageoftheday.html">Beverage of the day</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				<div id="selection"><a href="editselection.html">Selection</a></div>
				
				<div id="about"><a href="aboutus.html">About</a></div>
				
				<div id="profile"><a href="login.php">Profile</a></div>
			</div>
		</header>
		
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
				<div class="message"><?php if($message!="") { echo $message; } ?></div>
			</form>
			<br>
			<br>
			<br>
		</div>
		
		<footer>
			<nav>
				<a href="privacypolicy.html">Privacy Policy | </a>
				<a href="contactus.html">Contact Us | </a>
				<a href="aboutus.html">About Us</a>
			</nav>
			
			<aside>© 2020 FoodEdge Gourmet. All Rights Reserved</aside>
		</footer>
	</body>
</html>
	
</body>
</html>