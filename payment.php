<?php
session_start();
$total = $_COOKIE["total"];
$bsqty = $_SESSION['bsqty'];
$lsaqty = $_SESSION['lsaqty'];
$lsbqty = $_SESSION['lsbqty'];
$lscqty = $_SESSION['lscqty'];
$dsaqty = $_SESSION['dsaqty'];
$botdqty = $_SESSION['botdqty'];
$bstotal = $_COOKIE["bstotal"];
$lsatotal = $_COOKIE["lsatotal"];
$lsbtotal = $_COOKIE["lsbtotal"];
$lsctotal = $_COOKIE["lsctotal"];
$dsatotal = $_COOKIE["dsatotal"];
$botdtotal = $_COOKIE["botdtotal"];
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Menu"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Menu</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<header>
			<div id="logoholder"><a href="home.html"><img src="img/Logo.jpg" alt="FoodEdge Gourmet" id="logo"/></a></div>
			
			<div id="navigation">
				<div id="home"><a href="home.html">Home</a></div>
				
				<div id="aboutus">
					<ul>
						<li>About Us
							<ul>
								<li><a href="portfolio.html">Portfolio</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				<div id="services"><a href="services.html">Services</a></div>
				
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
				
				<div id="profile"><a href="login.php">Profile</a></div>
			</div>
		</header>
		
		<div id="body" class="row">
		<div class="col-75">
			<div class="container">
				<form name="paymentForm" method="post" action="paymentConfirmation.html" onsubmit="return validateForm()">

					<div class="row">
						<div class="col-50">
							<h3>Billing Address</h3>
							<label for="fname"><i class="fa fa-user"></i> Full Name*</label>
							<input type="text" id="name" name="name" placeholder="Kevin Malone" >
							
							<label for="email"><i class="fa fa-envelope"></i> Email*</label>
							<input type="text" id="email" name="email" placeholder="kevinmalone@gmail.com" >
							
							<label for="adr"><i class="fa fa-address-card-o"></i> Address*</label>
							<input type="text" id="adr" name="address" placeholder="456 Lorong 7 Jalan Batu Kawa" >
							
							<label for="city"><i class="fa fa-institution"></i> City*</label>
							<input type="text" id="city" name="city" placeholder="Kuching" >

							<label for="state">State*</label>
							<input type="text" id="state" name="state" placeholder="Sarawak" >
							
							<label for="zip">Zip*</label>
							<input type="text" id="zip" name="zip" placeholder="93250" >
						</div>

						<div class="col-50">
							<h3>Payment</h3>
							<label for="fname">Accepted Cards</label>
							<div class="icon-container">
								<img src="img/visa.png" alt="masterCard" id="imgVisa" height="70px" width="150px" class="fa fa-cc-visa" style="color:navy;"/>
								
								<img src="img/masterCard.png" alt="masterCard" id="imgMasterCard" height="70px" class="fa fa-cc-mastercard" style="color:red;"/>
							</div>
						
							<label for="cname">Name on Card*</label>
							<input type="text" id="cname" name="cardname" placeholder="Kelvin Malone" >
						
							<label for="ccnum">Credit card number*</label>
							<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" >
						
							<label for="expmonth">Exp Month*</label>
							<input type="text" id="expmonth" name="expmonth" placeholder="September" >

							<label for="expyear">Exp Year*</label>
							<input type="text" id="expyear" name="expyear" placeholder="2018" >
						
							<label for="cvv">CVV*</label>
							<input type="text" id="cvv" name="cvv" placeholder="352" >
						</div>
					</div>

					<label>
						<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
					</label>
					<input type="submit" value="Continue to checkout" class="btn">
				</form>
			</div>
		</div>

		<div class="col-25">
			<div class="container">
			<?php ?>
				<h4>Cart
					<span class="price" style="color:black">
						<i class="fa fa-shopping-cart"></i>
						<b><?php echo $bsqty + $lsaqty + $lsbqty + $lscqty + $dsaqty + $botdqty ?></b>
					</span>
				</h4>
				<?php if ($bsqty > 0) { ?>
				<p><a href="breakfastset.html"><?php echo "Breakfast Set" ?></a> <span class="price"><?php echo "RM", $bstotal; }?></span></p>
				<?php if ($lsaqty > 0) { ?>
				<p><a href="lunchseta.html"><?php echo "Lunch Set A" ?></a> <span class="price"><?php echo "RM", $lsatotal; }?></span></p>
				<?php if ($lsbqty > 0) { ?>
				<p><a href="lunchsetb.html"><?php echo "Lunch Set B" ?></a> <span class="price"><?php echo "RM", $lsbtotal; }?></span></p>
				<?php if ($lscqty > 0) { ?>
				<p><a href="lunchsetc.html"><?php echo "Lunch Set C" ?></a> <span class="price"><?php echo "RM", $lsctotal; }?></span></p>
				<?php if ($dsaqty > 0) { ?>
				<p><a href="dinnerseta.html"><?php echo "Dinner Set" ?></a> <span class="price"><?php echo "RM", $dsatotal; }?></span></p>
				<?php if ($botdqty > 0) { ?>
				<p><a href="beverageoftheday.html"><?php echo "Beverage of the day" ?></a> <span class="price"><?php echo "RM", $botdtotal; }?></span></p>
				<hr>
				<p>Total <span class="price" style="color:black"><b>RM<?php echo $total ?></b></span></p>
				</div>
			<?php ?>
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
		
		<script>
		function validateForm() {
			var _name = document.forms["paymentForm"]["name"].value;
			if (_name == "") {
				alert("Name must be filled out");
				return false;
			}
			
			var _email = document.forms["paymentForm"]["email"].value;
			if (_email == "") {
				alert("Email must be filled out");
				return false;
			}
				
			var _address = document.forms["paymentForm"]["address"].value;
			if (_address == "") {
				alert("Address must be filled out");
				return false;
			}
			
			var _city = document.forms["paymentForm"]["city"].value;
			if (_city == "") {
				alert("City must be filled out");
				return false;
			}
			
			var _state = document.forms["paymentForm"]["state"].value;
			if (_state == "") {
				alert("State must be filled out");
				return false;
			}
			
			var _zip = document.forms["paymentForm"]["zip"].value;
			if (_zip == "") {
				alert("Zipcode must be filled out");
				return false;
			}
			
			var _cname = document.forms["paymentForm"]["cname"].value;
			if (_cname == "") {
				alert("Name on card must be filled out");
				return false;
			}
					
			var _ccnum = document.forms["paymentForm"]["ccnum"].value;
			if (_ccnum == "") {
				alert("Credit card number must be filled out");
				return false;
			}
				
			var _expmonth = document.forms["paymentForm"]["expmonth"].value;
			if (_expmonth == "") {
				alert("Expiry month must be filled out");
				return false;
			}
				
			var _expyear = document.forms["paymentForm"]["expyear"].value;
			if (_expyear == "") {
				alert("Expiry year must be filled out");
				return false;
			}
			
			var _cvv = document.forms["paymentForm"]["cvv"].value;
			if (_cvv == "") {
				alert("CVV must be filled out");
				return false;
			}
		}
		</script>
	</body>
</html>
