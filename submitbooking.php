<?php
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Submit Booking"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Submit Booking</title>
		<link rel="icon" href="img/Icon.png">
		<script src="script/script.js"></script>
	</head>

	<body onload="loadbooking()">
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
		
		<div id="body">
			<div id="submitbooking">
				<h1 id="sbheading">Confirm Your Booking</h1>
				<br/>
				
				<div id="sbcontaineritem1">
					<img id="sbimg" src="img/smallbreakfast.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li>Breakfast Set</li>
						<li>Cost: RM19.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="bsqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="bstotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem2">
					<img id="sbimg" src="img/smalllunchA.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li>Lunch Set A</li>
						<li>Cost: RM24.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="lsaqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="lsatotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem3">
					<img id="sbimg" src="img/smalllunchB.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li>Lunch Set B</li>
						<li>Cost: RM28.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="lsbqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="lsbtotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem4">
					<img id="sbimg" src="img/smalllunchC.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li>Lunch Set C (100% Vegan Friendly)</li>
						<li>Cost: RM22.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="lscqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="lsctotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem5">
					<img id="sbimg" src="img/smalldinner.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li>Dinner Set A</li>
						<li>Cost: RM35.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="dsaqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="dsatotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem6">
					<img id="sbimg" src="img/smallbeverages.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li>Beverage of the day</li>
						<li>Cost: RM10.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="botdqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="botdtotal"></div></li>
					</ul>
				</div>
				
				<div id="emptyselection">
					<p style="text-align:center;">No Items Selected. Please Select Items from Food & Beverages Menu<p>
				</div>
				
				<div id="noitemsselected">
					<div id="sbtotalcostcontainer">
						<h3 id="totalcosttitle">Total Cost: RM</h3><h3 name="totalcost" id="totalcost"></h3>
					</div>
					
					<form action="" method="post">
						<button formaction="editselection.html" id="backtoeditselectionbutton">Edit Selection</button>
					</form>
					<form action="payment.php" method="post">
						<button onclick="sbtk()" id="sbtkbutton">Submit Booking To Kitchen</button>
					</form>
				</div>
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