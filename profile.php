<?php
session_start();
$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
if(isset($_SESSION["username"])) {
	$result = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_username='" . $_SESSION["username"] . "'");
}
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - typehere"/><!-- CHANGE CONTENT "typehere" PART TO PAGE NAME -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - typehere</title><!-- CHANGE TITLE "typehere" PART TO PAGE NAME -->
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
				
				<div id="profile"><a href="index.html">Sign Out</a></div>
			</div>
		</header>
		

		<div id="profilebody">
		<?php if (mysqli_num_rows($result) >0) {
				$row = mysqli_fetch_array($result) ?>
			<h1>Hi <?php echo $row["customer_firstname"]; ?>,</h1>
			<p id="profdesc">Welcome to your FoodEdge Gourmet Profile page.</p>
			<figure id="profpic">
				<a href="editprofile.html" id="profedit">
					<img src="img/kevin.png" alt="Profile picture" title="Edit profile">
				</a>
				<p><a href="editprofile.html">Edit Profile</a></p>
			</figure>
			<div id="profcontainer">
				<div id="profmember">
					<h2>Membership</h2>
					<hr>
					<p><span class="proftitle">Member ID:</span><br>
					<span class="profcontent"><?php echo $row["customer_id"]; ?></span></p>
					<p><span class="proftitle">Membership status:</span><br>
					<span class="profcontent"><?php echo $row["membership_status"]; ?></span></p>
					<p><span class="proftitle">Username:</span><br>
					<span class="profcontent"><?php echo $row["customer_username"]; ?></span></p>
				</div>
				<br>
				<div id="profabout">
					<h2>About</h2>
					<hr>
					<p><span class="proftitle">First Name:</span><br>
					<span class="profcontent"><?php echo $row["customer_firstname"]; ?></span></p>
					<p><span class="proftitle">Last Name:</span><br>
					<span class="profcontent"><?php echo $row["customer_lastname"]; ?></span></p>
				</div>
				<br>
				<div id="profcontact">
					<h2>Contact</h2>
					<hr>
					<p><span class="proftitle">Email:</span><br>
					<span class="profcontent"><?php echo $row["customer_email"]; ?></span></p>
					<p><span class="proftitle">Phone:</span><br>
					<span class="profcontent"><?php echo $row["customer_phone"]; ?></span></p>
					<p><span class="proftitle">Address:</span><br>
					<span class="profcontent"><?php echo $row["customer_address"]; ?></span></p>
				</div>
				<br>
				<button id="signup"><a href="logout.php">Log Out</a></button>
			</div>
		<?php } ?>
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