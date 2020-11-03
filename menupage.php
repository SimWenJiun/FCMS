<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Menu"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<script src="script/script.js"></script>
		<title>FoodeEdge Gourmet - Menu</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body" class="rowmenu">
			<div id="menubody">
			  <div id="foodbutton">
				<img src="img/breakfast.jpg" style="width:100%" onclick="openModal();currentSlide(1)" id="foodbuttonimage" class="hover-shadow cursor"><a href="breakfastset.php">
				<div id="foodbuttonbox">
					<div id="foodbuttontext">Breakfast Set</div>
				</div>
			  </div>
			  <div id="foodbutton">
				<img src="img/lunchA.jpg" style="width:100%" onclick="openModal();currentSlide(2)" id="foodbuttonimage" class="hover-shadow cursor"><a href="lunchseta.php">
				<div id="foodbuttonbox">
					<div id="foodbuttontext">Lunch Set A</div>
				</div>
			  </div>
			  <div id="foodbutton">
				<img src="img/lunchB.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" id="foodbuttonimage" class="hover-shadow cursor"><a href="lunchsetb.php">
				<div id="foodbuttonbox">
					<div id="foodbuttontext">Lunch Set B</div>
				</div>
			  </div>
			  <div id="foodbutton">
				<img src="img/lunchC.jpg" style="width:100%" onclick="openModal();currentSlide(4)" id="foodbuttonimage" class="hover-shadow cursor"><a href="lunchsetc.php">
				<div id="foodbuttonbox">
					<div id="foodbuttontext">Lunch Set C</div>
				</div>
			  </div>
			  <div id="foodbutton">
				<img src="img/dinner.jpg" style="width:100%" onclick="openModal();currentSlide(5)" id="foodbuttonimage" class="hover-shadow cursor"><a href="dinnerseta.php">
				<div id="foodbuttonbox">
					<div id="foodbuttontext">Dinner Set</div>
				</div>
			  </div>
			  <div id="foodbutton">
				<img src="img/beverages.jpg" style="width:100%" onclick="openModal();currentSlide(6)" id="foodbuttonimage" class="hover-shadow cursor"><a href="beverageoftheday.php">
				<div id="foodbuttonbox">
					<div id="foodbuttontext">Beverage of the day</div>
				</div>
			  </div>
			</div>
		
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>