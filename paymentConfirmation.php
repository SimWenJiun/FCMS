<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Edit Selection"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Edit Selection</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body">
			<div id="paymentConf">
				<img src="img/successfulPurchase.png" id="imagePurchase" alt="purchase complete" height="250px">
				<h1>Booking Complete</h1>
				<h2>Thank you for booking with us</h2>
				</br>
				<p>For further information, please contact us at <a href="KevinMalone@FoodEdge.com" id="emailP">KevinMalone@FoodEdge.com</a></p>
				<button type="button" id="paymentSummary" class="btn"><a href="paymentSummary.php">View payment summary</a></button>
				<button type="button" id="backToMenu" class="btn"><a href=".php">Back to Home Page</a></button>
			</div>
		</div>
		
		<?php include('footer.php');?>
		
	</body>
</html>
