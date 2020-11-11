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
				<form action="booking.php" method="post">
					<table id="containeritem1" style="width:100%">
						<tr>
							<td>
								<img src="img/smallbreakfast.jpg" alt="Item Image" height="100px"/>
								<ul>							
									<li id="selectionname1">Breakfast Set</li>
									<li>RM<p id="selectionprice1">19.99</p></li>
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
										<td><input type="number" name="selectionquantity1" id="selectionquantity1" min="0" max="999" required="required"></td>
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
									<li id="selectionname2">Lunch Set A</li>
									<li>RM<p id="selectionprice2">24.99</p></li>
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
										<td><input type="number" name="selectionquantity2" id="selectionquantity2" min="0" max="999" required="required"></td>
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
									<li id="selectionname3">Lunch Set B</li>
									<li>RM<p id="selectionprice3">28.99</p></li>
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
										<td><input type="number" name="selectionquantity3" id="selectionquantity3" min="0" max="999" required="required"></td>
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
									<li id="selectionname4">Lunch Set C (100% Vegan Friendly)</li>
									<li>RM<p id="selectionprice4">22.99</p></li>
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
										<td><input type="number" name="selectionquantity4" id="selectionquantity4" min="0" max="999" required="required"></td>
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
									<li id="selectionname5">Dinner Set A</li>
									<li>RM<p id="selectionprice5">35.99</p></li>
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
										<td><input type="number" name="selectionquantity5" id="selectionquantity5" min="0" max="999" required="required"></td>
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
									<li id="selectionname6">Beverage of the day</li>
									<li>RM<p id="selectionprice6">10.99</p></li>
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
										<td><input type="number" name="selectionquantity6" id="selectionquantity6" min="0" max="999" required="required"></td>
										<td><img src="img/positive.png" alt="add" id="increaseqty" height="20px" onclick="incqty6()"/></td>
									  </tr>
									</td>
								</table>
							</td>
						</tr>
					</table>
					
					<div id="selectiondatecontainer">
						<label for="orderdeliverydate"><b>Delivery Date: </b></label>
						<input type="date" name="orderdeliverydate" id="orderdeliverydate">
					</div>
					
					<div id="selectionaddresscontainer">
						<label for="orderdeliveryaddress"><b>Delivery Address: </b></label>
						<input type="text" name="orderdeliveryaddress" id="orderdeliveryaddress" style="width:400px">
					</div>
					
					<div id="emptyselection">
						<p>No Items Selected. Please Select Items from Food & Beverages Menu<p>
					</div>
					
					<button onclick="saveselections()" id="booknow">Book Now</button>
				</form>
				<form action="index.php">
					<button onclick="saveselections()" id="saveselection">Save Changes</button>
				</form>
			</div>
		</div>
		
		<?php include('footer.php');?>
	</body>	
</html>

