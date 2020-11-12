<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - dinnerseta.php"/><!-- CHANGE CONTENT "typehere" PART TO PAGE NAME -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - dinnerseta.php</title><!-- CHANGE TITLE "typehere" PART TO PAGE NAME -->
		<link rel="icon" href="img/Icon.png">
		<script src="script/script.js"></script>
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body" class="lunchsetacontainer">
			<div id = "product-content" class="row_menu">
				<div class = "lsetaimg">
					
					<figure class="product_wrapper">						
						<a href="img/dinner.jpg">
							<img width="600" height="400" src="img/dinner.jpg" class="pro-img">
						</a>												
					</figure>
				</div>
				<div class="product-summary">
					<h1 class="product_title">Dinner Set A</h1>
					<p class="price">
						<span class="product-amount">
							<span class="pricetag">RM 35.99</span>
						</span>
					</p>
					<div id="product_details">
						<p><strong>Menu details:</strong></p>
						<ul>
							<li>Beef and Mushrooms with Mashed Potatoes</li>
							<li>Macaroni and Cheese</li>
							<li>Traditional Meat Loaf</li>
							<li>Slow Cooker Beef Vegerable Stew</li>
							<li>Saucy Pork Chop Skillet</li>
							<li>Roasted Chicken</li>
							<li>Fruits</li>
						</ul>
					</div>
					<div id="enquire">
						<form action="editselection.php" method="post">
							<button onclick="dsaselected()" formaction="editselection.php" id="enquirenow">Add to selection</button>
						</form>
					</div>
				</div>
			</div>						
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>