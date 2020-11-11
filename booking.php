<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Submit Booking"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Submit Booking</title>
		<link rel="icon" href="img/Icon.png">
		<script src="script/script.js"></script>
	</head>

	<body onload="loadbooking()">
		<?php include('header.php');?>
		
		<div id="body">
			<div id="submitbooking">
				<h1 id="sbheading">Confirm Your Booking</h1>
				<br/>
				
				<div id="sbcontaineritem1">
					<img id="sbimg" src="img/smallbreakfast.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item1name" name="item1name">Breakfast Set</li>
						<li id="item1price" name="item1price">Cost: RM19.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="selectionquantity1div" name="selectionquantity1div"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="itemtotal1" name="itemtotal1"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem2">
					<img id="sbimg" src="img/smalllunchA.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item2name" name="item2name">Lunch Set A</li>
						<li id="item2price" name="item2price">Cost: RM24.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="selectionquantity2div" name="selectionquantity2div"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="itemtotal2" name="itemtotal2"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem3">
					<img id="sbimg" src="img/smalllunchB.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item3name" name="item3name">Lunch Set B</li>
						<li id="item3price" name="item3price">Cost: RM28.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="selectionquantity3div" name="selectionquantity3div"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="itemtotal3" name="itemtotal3"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem4">
					<img id="sbimg" src="img/smalllunchC.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item4name" name="item4name">Lunch Set C (100% Vegan Friendly)</li>
						<li id="item4price" name="item4price">Cost: RM22.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="selectionquantity4div" name="selectionquantity4div"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="itemtotal4" name="itemtotal4"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem5">
					<img id="sbimg" src="img/smalldinner.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item5name" name="item5name">Dinner Set A</li>
						<li id="item5price" name="item5price">Cost: RM35.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="selectionquantity5div" name="selectionquantity5div"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="itemtotal5" name="itemtotal5"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem6">
					<img id="sbimg" src="img/smallbeverages.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item6name" name="item6name">Beverage of the day</li>
						<li id="item6price" name="item6price">Cost: RM10.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="selectionquantity6div" name="selectionquantity6div"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="itemtotal6" name="itemtotal6"></div></li>
					</ul>
				</div>
				
				<div id="orderdatecontainer">
					<li id="sbdetailline">Date:&nbsp <div id="orderdate" name="orderdate"></div></li>
				</div>
				<div id="orderaddresscontainer">
					<li id="sbdetailline">Address:&nbsp <div id="orderaddress" name="orderaddress"></div></li>
				</div>
				
				<div id="emptyselection">
					<p style="text-align:center;">No Items Selected. Please Select Items from Food & Beverages Menu<p>
				</div>
				
				<div id="noitemsselected">
					<div id="sbtotalcostcontainer">
						<h3 id="totalcosttitle">Total Cost: RM</h3><h3 name="totalcost" id="totalcost"></h3>
					</div>
					
					<form action="editselection.php">
						<button id="backtoeditselectionbutton">Edit Selection</button>
					</form>
					<form action="bookingsubmit.php" method="post">						
						<button id="sbtkbutton" type="submit">Submit Booking To Kitchen</button>
					</form>
				</div>
			</div>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>