<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Home"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Home</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="bodyhome">
			<h1>Welcome To FoodEdge Gourmet</h1>
			
			<p id="homepageparagraph">
				FoodEdge Gourmet Catering focuses on food and beverage catering
				services for corporate, seminar, weddings and any events in Kuching
				for nearly 5 years. Our aim is to deliver outstanding service with
				a commitment to quality, safety and health whether in the workplace,
				schools and colleges, hospitals, at leisure, on the move or in remote
				environment.
			</p></br>
			
			<h2>Taste Of Our Menu</h2>
			
			<p id="homepageparagraph">
				Make your personal event extra special by trying out one of our best
				sellers that will bring water to the mouths of the guests upon first glance.
			</p>
			
			<div id="homepagemenu">
				<div id="foodbutton">
				  <img id="foodbuttonimage" src="img/smallbreakfast.jpg" alt="Breakfast Set">
				  <div id="foodbuttonbox">
					<div id="foodbuttontext" onclick="location.href='breakfastset.php';" >Breakfast Set Details</div>
				  </div>
				</div>
				
				<div id="foodbutton">
				  <img id="foodbuttonimage" src="img/smalllunchA.jpg" alt="Lunch Set A">
				  <div id="foodbuttonbox">
					<div id="foodbuttontext" onclick="location.href='lunchseta.php';" >Lunch Set A Details</div>
				  </div>
				</div>
				
				<div id="foodbutton">
				  <img id="foodbuttonimage" src="img/smalldinner.jpg" alt="Dinner Set A">
				  <div id="foodbuttonbox">
					<div id="foodbuttontext" onclick="location.href='dinnerseta.php';" >Dinner Set A Details</div>
				  </div>
				</div>
				
				<div id="foodbutton">
				  <img id="foodbuttonimage" src="img/smallbeverages.jpg" alt="Beverage Of The Day">
				  <div id="foodbuttonbox">
					<div id="foodbuttontext" onclick="location.href='beverageoftheday.php';" >Beverage Of The Day Details</div>
				  </div>
				</div>
			</div>
			
			<h2>What We Bring To The Table</h2>
			
			<p id="homepageparagraph">
				Here at Food Edge Gourmet we strive to bring our customers top of the line catering
				service at their special events. The best of the best Chefs are assigned to prepare
				food for your guests and no doubt the food will be finger licking good. With our 
				high quality services now merged with a unique and simple to use website, you will be
				taken care of. Customers can now have personalized accounts that enable them to easily
				reserve food for their events with a click of a few buttons. 
			</p>
			
			
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>