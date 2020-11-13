<?php
	session_start();
	$selectionname1 = $_COOKIE["selectionname1"];
	$selectionprice1 = $_COOKIE["selectionprice1"];
	$selectionquantity1 = $_COOKIE["selectionquantity1"];
	$selectiontotal1 = (float)$selectionprice1 * (int)$selectionquantity1;

	$selectionname2 = $_COOKIE["selectionname2"];
	$selectionprice2 = $_COOKIE["selectionprice2"];
	$selectionquantity2 = $_COOKIE["selectionquantity2"];
	$selectiontotal2 = (float)$selectionprice2 * (int)$selectionquantity2;

	$selectionname3 = $_COOKIE["selectionname3"];
	$selectionprice3 = $_COOKIE["selectionprice3"];
	$selectionquantity3 = $_COOKIE["selectionquantity3"];
	$selectiontotal3 = (float)$selectionprice3 * (int)$selectionquantity3;

	$selectionname4 = $_COOKIE["selectionname4"];
	$selectionprice4 = $_COOKIE["selectionprice4"];
	$selectionquantity4 = $_COOKIE["selectionquantity4"];
	$selectiontotal4 = (float)$selectionprice4 * (int)$selectionquantity4;

	$selectionname5 = $_COOKIE["selectionname5"];
	$selectionprice5 = $_COOKIE["selectionprice5"];
	$selectionquantity5 = $_COOKIE["selectionquantity5"];
	$selectiontotal5 = (float)$selectionprice5 * (int)$selectionquantity5;

	$selectionname6 = $_COOKIE["selectionname6"];
	$selectionprice6 = $_COOKIE["selectionprice6"];
	$selectionquantity6 = $_COOKIE["selectionquantity6"];
	$selectiontotal6 = (float)$selectionprice6 * (int)$selectionquantity6;

	$orderdeliverydate = $_COOKIE["orderdeliverydate"];
	$orderdeliveryaddress = $_COOKIE["orderdeliveryaddress"];
	$total = $selectiontotal1 + $selectiontotal2 + $selectiontotal3 + $selectiontotal4 + $selectiontotal5 + $selectiontotal6;
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Menu"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Menu</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body" class="row">
		<div class="col-75">
			<div class="container">
				<form name="paymentForm" method="post" action="paymentSubmit.php" onsubmit="return validateForm()">

					<div class="row">
						<div class="col-50">
							<h3>Billing Address</h3>
							<label for="fname"><i class="fa fa-user"></i> Full Name*</label>
							<input type="text" id="customer_name" name="customer_name" placeholder="Kevin Malone" >
							
							<label for="email"><i class="fa fa-envelope"></i> Email*</label>
							<input type="text" id="customer_email" name="customer_email" placeholder="kevinmalone@gmail.com" >
							
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
							<input type="text" id="card_name" name="card_name" placeholder="Kelvin Malone" >
						
							<label for="ccnum">Credit card number*</label>
							<input type="text" id="card_number" name="card_number" placeholder="1111-2222-3333-4444" >
						
							<label for="expmonth">Exp Month*</label>
							<input type="text" id="expiry_month" name="expiry_month" placeholder="September" >

							<label for="expyear">Exp Year*</label>
							<input type="text" id="expiry_year" name="expiry_year" placeholder="2018" >
						
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
						<b><?php echo $selectionquantity1 + $selectionquantity2 + $selectionquantity3 + $selectionquantity4 + $selectionquantity5 + $selectionquantity6 ?></b>
					</span>
				</h4>
				<?php if ($selectionquantity1 > 0) { ?>
				<p><a href="breakfastset.php"><?php echo "Breakfast Set" ?></a> <span class="price"><?php echo "RM", $selectiontotal1; }?></span></p>
				<?php if ($selectionquantity2 > 0) { ?>
				<p><a href="lunchseta.php"><?php echo "Lunch Set A" ?></a> <span class="price"><?php echo "RM", $selectiontotal2; }?></span></p>
				<?php if ($selectionquantity3 > 0) { ?>
				<p><a href="lunchsetb.php"><?php echo "Lunch Set B" ?></a> <span class="price"><?php echo "RM", $selectiontotal3; }?></span></p>
				<?php if ($selectionquantity4 > 0) { ?>
				<p><a href="lunchsetc.php"><?php echo "Lunch Set C" ?></a> <span class="price"><?php echo "RM", $selectiontotal4; }?></span></p>
				<?php if ($selectionquantity5 > 0) { ?>
				<p><a href="dinnerseta.php"><?php echo "Dinner Set" ?></a> <span class="price"><?php echo "RM", $selectiontotal5; }?></span></p>
				<?php if ($selectionquantity6 > 0) { ?>
				<p><a href="beverageoftheday.php"><?php echo "Beverage of the day" ?></a> <span class="price"><?php echo "RM", $selectiontotal6; }?></span></p>
				<hr>
				<p>Total <span class="price" id="payment_amount" name="payment_amount" style="color:black"><b>RM<?php echo $total ?></b></span></p>
				</div>
			<?php ?>
			</div>
		</div>
		
		<?php include('footer.php');?>
		
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
