<?php
session_start();
$message = array();;
$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
if(isset($_SESSION["id"])) {
	$result = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_id='" . $_SESSION["id"] . "'");
}
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - typehere"/><!-- CHANGE CONTENT "typehere" PART TO PAGE NAME -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Edit Profile</title><!-- CHANGE TITLE "typehere" PART TO PAGE NAME -->
		<link rel="icon" href="img/Icon.png">
		<script src="script/script.js"></script>
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
		

		<div id="editbody">
		<?php if (mysqli_num_rows($result) >0) {
				$row = mysqli_fetch_array($result) ?>
			<h1>Edit Profile</h1>
			
			<form action="edit.php" method="post">
				<input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display:none;">

				<img src="img/kevin.png" id="output" width="200" height="200" style="border-radius:50%; object-fit:cover;"/>
				<p><label for="file" id="upload" style="cursor: pointer;">Upload Image</label></p>				
				<br>
				<h2>About</h2>
				<hr><br>
				<label for="fname"><b>First Name</b></label><br>
				<input type="text" name="fname" id="fname" value=<?php echo $row["customer_firstname"]; ?>><br>
				
				<label for="lname"><b>Last Name</b></label><br>
				<input type="text" name="lname" id="lname" value=<?php echo $row["customer_lastname"]; ?>><br>
				
				<br>
				<h2>Contact</h2>
				<hr><br>
				<label for="email"><b>Email</b></label><br>
				<input type="email" name="email" id="email" value=<?php echo $row["customer_email"]; ?>><br>
				
				<label for="phone"><b>Phone Number</b></label><br>
				<input type="tel" name="phone" id="phone" value=<?php echo $row["customer_phone"]; ?> pattern="^(\+601)[0-46-9]-*[0-9]{7,8}$"><br>
				
				<label for="address"><b>Address</b></label><br>
				<textarea name="address" id="address"><?php echo $row["customer_address"]; ?></textarea><br>
				
				<br>
				<h2>Login Information</h2>
				<hr><br>
				<label for="uname"><b>Username</b></label><br>
				<input type="uname" name="uname" id="uname" value=<?php echo $row["customer_username"]; ?>><br>
				
				<label for="pword"><b>Password</b></label><br>
				<input type="password" name="pword" id="pword" value=<?php echo $row["customer_password"]; ?>><br>
				
				<label for="cpword"><b>Confirmed Password</b></label><br>
				<input type="password" name="cpword" id="cpword" value=<?php echo $row["customer_password"]; ?>><br>
				
				<div class="message"><?php if($message!="") { foreach ($message as $err) { echo $err, '<br/>'; } } ?></div>
				<button type="submit" name="cancel" formaction="profile.php">Cancel</button>
				<button type="submit" name="save">Save</button>
			</form>
			<br>
			<br>
		<?php }
		?>
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