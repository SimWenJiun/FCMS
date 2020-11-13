<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - breakfastset.php"/><!-- CHANGE CONTENT "typehere" PART TO PAGE NAME -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - breakfastset.php</title><!-- CHANGE TITLE "typehere" PART TO PAGE NAME -->
		<link rel="icon" href="img/Icon.png">
		<script src="script/script.js"></script>
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body" class="bfcontainer">
			<div id = "product-content" class="row_menu">
				<div class = "bfimg">
					
					<figure class="product_wrapper">						
						<a href="img/breakfast.jpg">
							<img width="600" height="400" src="img/breakfast.jpg" class="pro-img">
						</a>												
					</figure>
				</div>
				<div class="product-summary">
					<h1 class="product_title">Breakfast Set</h1>
					<p class="price">
						<span class="product-amount">
							<span class="pricetag">RM 19.99</span>
						</span>
					</p>
					<div id="product_details">
						<p><strong>Menu details:</strong></p>
						<ul>
							<li>Bagel</li>
							<li>Breakfast burrito</li>
							<li>Boiled Egg</li>
							<li>Breakfast sandwich</li>
							<li>Cereal</li>
							<li>Fried Egg</li>
							<li>Fruits</li>
						</ul>
					</div>
					<div id="enquire">
						<form action="editselection.php" method="post">
							<button onclick="itemselected1()" formaction="editselection.php" id="enquirenow">Add to selection</button>
						</form>
					</div>
				</div>
			</div>						
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>