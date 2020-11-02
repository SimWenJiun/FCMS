<?php
session_start();
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Edit Selection"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Edit Selection</title>
		<link rel="icon" href="img/Icon.png">
		<script src="script/script.js"></script>
	</head>

	<body onload="loadselection()">
		<?php include('header.php');?>
		
		<div id="body">
			<div id="editselection">
				<h1>Selection</h1>
				<br/>
				<form action="selection.php" method="post">
				
				<table id="containeritem1" style="width:100%">
					<tr>
						<td>
							<img src="img/smallbreakfast.jpg" alt="Item Image" height="100px"/>
							<ul>							
								<li>Breakfast Set</li>
								<li>RM19.99</li>
							</ul>
						</td>
						<td>
							<table>
								<th>
								  <tr>
									<th id="qtyheading" colspan="3">Quantity</th>
								  </tr>
								</th>
								<td>
								  <tr>
									<td><img src="img/negative.png" alt="reduce" id="reduceqty" height="20px" onclick="decqty1()"/></td>
									<td><input type="number" name="bsqty" id="bsqty" min="0" max="999" required="required"></td>
									<td><img src="img/positive.png" alt="add" id="increaseqty" height="20px" onclick="incqty1()"/></td>
								  </tr>
								</td>
							</table>
						</td>
					</tr>
				</table>
				
				<table id="containeritem2" style="width:100%">
					<tr>
						<td>
							<img src="img/smalllunchA.jpg" alt="Item Image" height="100px"/>
							<ul>							
								<li>Lunch Set A</li>
								<li>RM24.99</li>
							</ul>
						</td>
						<td>
							<table>
								<th>
								  <tr>
									<th id="qtyheading" colspan="3">Quantity</th>
								  </tr>
								</th>
								<td>
								  <tr>
									<td><img src="img/negative.png" alt="reduce" id="reduceqty" height="20px" onclick="decqty2()"/></td>
									<td><input type="number" name="lsaqty" id="lsaqty" min="0" max="999" required="required"></td>
									<td><img src="img/positive.png" alt="add" id="increaseqty" height="20px" onclick="incqty2()"/></td>
								  </tr>
								</td>
							</table>
						</td>
					</tr>
				</table>
				
				<table id="containeritem3" style="width:100%">
					<tr>
						<td>
							<img src="img/smalllunchB.jpg" alt="Item Image" height="100px"/>
							<ul>							
								<li>Lunch Set B</li>
								<li>RM28.99</li>
							</ul>
						</td>
						<td>
							<table>
								<th>
								  <tr>
									<th id="qtyheading" colspan="3">Quantity</th>
								  </tr>
								</th>
								<td>
								  <tr>
									<td><img src="img/negative.png" alt="reduce" id="reduceqty" height="20px" onclick="decqty3()"/></td>
									<td><input type="number" name="lsbqty" id="lsbqty" min="0" max="999" required="required"></td>
									<td><img src="img/positive.png" alt="add" id="increaseqty" height="20px" onclick="incqty3()"/></td>
								  </tr>
								</td>
							</table>
						</td>
					</tr>
				</table>
				
				<table id="containeritem4" style="width:100%">
					<tr>
						<td>
							<img src="img/smalllunchC.jpg" alt="Item Image" height="100px"/>
							<ul>							
								<li>Lunch Set C (100% Vegan Friendly)</li>
								<li>RM22.99</li>
							</ul>
						</td>
						<td>
							<table>
								<th>
								  <tr>
									<th id="qtyheading" colspan="3">Quantity</th>
								  </tr>
								</th>
								<td>
								  <tr>
									<td><img src="img/negative.png" alt="reduce" id="reduceqty" height="20px" onclick="decqty4()"/></td>
									<td><input type="number" name="lscqty" id="lscqty" min="0" max="999" required="required"></td>
									<td><img src="img/positive.png" alt="add" id="increaseqty" height="20px" onclick="incqty4()"/></td>
								  </tr>
								</td>
							</table>
						</td>
					</tr>
				</table>
				
				<table id="containeritem5" style="width:100%">
					<tr>
						<td>
							<img src="img/smalldinner.jpg" alt="Item Image" height="100px"/>
							<ul>							
								<li>Dinner Set A</li>
								<li>RM35.99</li>
							</ul>
						</td>
						<td>
							<table>
								<th>
								  <tr>
									<th id="qtyheading" colspan="3">Quantity</th>
								  </tr>
								</th>
								<td>
								  <tr>
									<td><img src="img/negative.png" alt="reduce" id="reduceqty" height="20px" onclick="decqty5()"/></td>
									<td><input type="number" name="dsaqty" id="dsaqty" min="0" max="999" required="required"></td>
									<td><img src="img/positive.png" alt="add" id="increaseqty" height="20px" onclick="incqty5()"/></td>
								  </tr>
								</td>
							</table>
						</td>
					</tr>		
				</table>					  
				
				<table id="containeritem6" style="width:100%">
					<tr>
						<td>
							<img src="img/smallbeverages.jpg" alt="Item Image" height="100px"/>
							<ul>							
								<li>Beverage of the day</li>
								<li>RM10.99</li>
							</ul>
						</td>
						<td>
							<table>
								<th>
								  <tr>
									<th id="qtyheading" colspan="3">Quantity</th>
								  </tr>
								</th>
								<td>
								  <tr>
									<td><img src="img/negative.png" alt="reduce" id="reduceqty" height="20px" onclick="decqty6()"/></td>
									<td><input type="number" name="botdqty" id="botdqty" min="0" max="999" required="required"></td>
									<td><img src="img/positive.png" alt="add" id="increaseqty" height="20px" onclick="incqty6()"/></td>
								  </tr>
								</td>
							</table>
						</td>
					</tr>
				</table>
				
				<div id="emptyselection">
					<p>No Items Selected. Please Select Items from Food & Beverages Menu<p>
				</div>
				
					<button onclick="saveselections()" id="booknow">Book Now</button>
				</form>
					<button onclick="saveselections()" href="index.php" id="saveselection">Save Changes</button>
			</div>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>