<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$result = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_username='" . $_POST["uname"] . "' and customer_password = '". $_POST["pword"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid username or password!";
	} else {
		$message = "Login successful!";
		header("Location: home.html");
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
				<div id="home"><a href="index.html">Home</a></div>
				
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
				
				<div id="profile"><a href="login.php">Login</a></div>
			</div>
		</header>
		
		<div id="body">
			<div id="loginbox">
				<h1>User Login</h1>
				<img src="img/avatar.png" alt="User avatar" id="avatar">
				<form action="" method="post">
				<div class="message"><?php if($message!="") { echo $message; } ?></div>
					<label for="login"><b>Username</b></label>
					<input type="text" name="uname" id="login">
					
					<label for="password"><b>Password</b></label>
					<input type="password" name="pword" id="password">
					
					<button type="submit" id="loginbut">Login</button>
					<span id="forgot"><a href="">Forgot password?</a></span>
					
					<button type="submit" formaction="registration.html" id="submitbut">Sign Up</button>
				</form>
			</div>
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