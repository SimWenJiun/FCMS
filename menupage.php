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
			  <div class="columnmenu">
				<img src="img/breakfast.jpg" style="width:100%" onclick="openModal();currentSlide(1)" id="menu_pic" class="hover-shadow cursor">
			  </div>
			  <div class="columnmenu">
				<img src="img/lunchA.jpg" style="width:100%" onclick="openModal();currentSlide(2)" id="menu_pic" class="hover-shadow cursor">
			  </div>
			  <div class="columnmenu">
				<img src="img/lunchB.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" id="menu_pic" class="hover-shadow cursor">
			  </div>
			  <div class="columnmenu">
				<img src="img/lunchC.jpg" style="width:100%" onclick="openModal();currentSlide(4)" id="menu_pic" class="hover-shadow cursor">
			  </div>
			  <div class="columnmenu">
				<img src="img/dinner.jpg" style="width:100%" onclick="openModal();currentSlide(5)" id="menu_pic" class="hover-shadow cursor">
			  </div>
			  <div class="columnmenu">
				<img src="img/beverages.jpg" style="width:100%" onclick="openModal();currentSlide(6)" id="menu_pic" class="hover-shadow cursor">
			  </div>
			</div>

			<div id="myModal" class="modal">
			  <span class="close cursor" onclick="closeModal()">&times;</span>
			  <div class="modal-content">

				<div class="mySlides">
					<div class="columnmenu" id="containermenu">
						<div class="numbertext">1 / 6</div>
						<img src="img/breakfast.jpg" style="width:100%" id="menu_pic"><a href="breakfastset.php">
						<div class="overlay">
							<div class="o_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque magna, id ultrices augue. Proin non purus et est vestibulum auctor. Quisque at laoreet tortor. Aliquam ullamcorper lectus at eros tempus lobortis. Donec vitae feugiat nisi, vitae egestas arcu. Sed maximus, velit at sagittis gravida, massa ante dignissim ipsum, vel vulputate eros velit a elit.</div>
						</div>
					</div>
				</div>

				<div class="mySlides">
				  <div class="numbertext">2 / 6</div>
					<div class="columnmenu" id="containermenu">
						<img src="img/lunchA.jpg" style="width:100%" id="menu_pic"><a href="lunchseta.php">
						<div class="overlay">
								<div class="o_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque magna, id ultrices augue. Proin non purus et est vestibulum auctor. Quisque at laoreet tortor. Aliquam ullamcorper lectus at eros tempus lobortis. Donec vitae feugiat nisi, vitae egestas arcu. Sed maximus, velit at sagittis gravida, massa ante dignissim ipsum, vel vulputate eros velit a elit.</div>
						</div>
					</div>
				</div>

				<div class="mySlides">
				  <div class="numbertext">3 / 6</div>
					<div class="columnmenu" id="containermenu">
						<img src="img/lunchB.jpeg" style="width:100%" id="menu_pic"><a href="lunchsetb.php">
						<div class="overlay">
								<div class="o_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque magna, id ultrices augue. Proin non purus et est vestibulum auctor. Quisque at laoreet tortor. Aliquam ullamcorper lectus at eros tempus lobortis. Donec vitae feugiat nisi, vitae egestas arcu. Sed maximus, velit at sagittis gravida, massa ante dignissim ipsum, vel vulputate eros velit a elit.</div>
						</div>
					</div>
				</div>
				
				<div class="mySlides">
				  <div class="numbertext">4 / 6</div>
					<div class="columnmenu" id="containermenu">
						<img src="img/lunchC.jpg" style="width:100%" id="menu_pic"><a href="lunchsetc.php">
						<div class="overlay">
								<div class="o_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque magna, id ultrices augue. Proin non purus et est vestibulum auctor. Quisque at laoreet tortor. Aliquam ullamcorper lectus at eros tempus lobortis. Donec vitae feugiat nisi, vitae egestas arcu. Sed maximus, velit at sagittis gravida, massa ante dignissim ipsum, vel vulputate eros velit a elit.</div>
						</div>
					</div>
				</div>
				
				<div class="mySlides">
				  <div class="numbertext">5 / 6</div>
					<div class="columnmenu" id="containermenu">
						<img src="img/dinner.jpg" style="width:100%" id="menu_pic"><a href="dinnerseta.php">
						<div class="overlay">
								<div class="o_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque magna, id ultrices augue. Proin non purus et est vestibulum auctor. Quisque at laoreet tortor. Aliquam ullamcorper lectus at eros tempus lobortis. Donec vitae feugiat nisi, vitae egestas arcu. Sed maximus, velit at sagittis gravida, massa ante dignissim ipsum, vel vulputate eros velit a elit.</div>
						</div>
					</div>
				</div>
				
				<div class="mySlides">
				  <div class="numbertext">6 / 6</div>
					<div class="columnmenu" id="containermenu">
						<img src="img/beverages.jpg" style="width:100%" id="menu_pic"><a href="beverageoftheday.php">
						<div class="overlay">
								<div class="o_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque magna, id ultrices augue. Proin non purus et est vestibulum auctor. Quisque at laoreet tortor. Aliquam ullamcorper lectus at eros tempus lobortis. Donec vitae feugiat nisi, vitae egestas arcu. Sed maximus, velit at sagittis gravida, massa ante dignissim ipsum, vel vulputate eros velit a elit.</div>
						</div>
					</div>
				</div>
				
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

				<div class="caption-container">
				  <p id="caption"></p>
				</div>


				<div class="columnmenu">
				  <img class="demo cursor" src="img/breakfast.jpg" style="width:100%" onclick="currentSlide(1)" alt="Breakfast Set" id="menu_pic">
				</div>
				<div class="columnmenu">
				  <img class="demo cursor" src="img/lunchA.jpg" style="width:100%" onclick="currentSlide(2)" alt="Lunch Set A" id="menu_pic">
				</div>
				<div class="columnmenu">
				  <img class="demo cursor" src="img/lunchB.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Lunch Set B" id="menu_pic">
				</div>
				<div class="columnmenu">
				  <img class="demo cursor" src="img/lunchC.jpg" style="width:100%" onclick="currentSlide(4)" alt="Lunch Set C (100% Vegan Friendly)" id="menu_pic">
				</div>
				<div class="columnmenu">
				  <img class="demo cursor" src="img/dinner.jpg" style="width:100%" onclick="currentSlide(5)" alt="Dinner Set A" id="menu_pic">
				</div>
				<div class="columnmenu">
				  <img class="demo cursor" src="img/beverages.jpg" style="width:100%" onclick="currentSlide(6)" alt="Beverage of the day" id="menu_pic">
				</div>
			  </div>
			</div>
		
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>