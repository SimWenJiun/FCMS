<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - lunchseta.php"/><!-- CHANGE CONTENT "typehere" PART TO PAGE NAME -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - lunchseta.php</title><!-- CHANGE TITLE "typehere" PART TO PAGE NAME -->
		<link rel="icon" href="img/Icon.png">
		<script src="script/script.js"></script>
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body" class="lunchsetacontainer">
			<div id = "product-content" class="row_menu">
				<div class = "lsetaimg">
					
					<figure class="product_wrapper">						
						<a href="img/lunchA.jpg">
							<img width="600" height="400" src="img/lunchA.jpg" class="pro-img">
						</a>												
					</figure>
				</div>
				<div class="product-summary">
					<h1 class="product_title">Lunch Set A</h1>
					<p class="price">
						<span class="product-amount">
							<span class="pricetag">RM 24.99</span>
						</span>
					</p>
					<div id="product_details">
						<p><strong>Menu details:</strong></p>
						<ul>
							<li>Keto Taco Cups</li>
							<li>Cheesy Mexican Cauliflower Rice</li>
							<li>Turkey Taco Lettuce Wraps</li>
							<li>Spicy Chicken Taquitos</li>
							<li>Tacos Al Pastor</li>
							<li>Chili Cheese Crunchwrap</li>
							<li>Fruits</li>
						</ul>
					</div>
					<div id="enquire">
						<form action="editselection.php" method="post">
							<button onclick="itemselected2()" formaction="editselection.php" id="enquirenow">Add to selection</button>
						</form>
					</div>
				</div>
			</div>						
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>