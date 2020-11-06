<?php
//to connect to db
$dbconn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");

if(!$dbconn)
{
    die("Connection failed: " . mysqli_connect_error());
}
//to connect to database ^


//need to initialize following correctly
/*
$item1name = $_POST['item1name'];
$item1price = $_POST['item1price'];
$bsqtydiv = $_POST['bsqtydiv'];
$item2name = $_POST['item2name'];
$item2price = $_POST['item2price'];
$lsaqtydiv = $_POST['lsaqtydiv'];
$item3name = $_POST['item3name'];
$item3price = $_POST['item3price'];
$lsbqtydiv = $_POST['lsbqtydiv'];
$item4name = $_POST['item4name'];
$item4price = $_POST['item4price'];
$lscqtydiv = $_POST['lscqtydiv'];
$item5name = $_POST['item5name'];
$item5price = $_POST['item5price'];
$dsaqtydiv = $_POST['dsaqtydiv'];
$item6name = $_POST['item6name'];
$item6price = $_POST['item6price'];
$botdqtydiv = $_POST['botdqtydiv'];
$orderdate = $_POST['orderdate'];
$orderaddress = $_POST['orderaddress'];
$totalcost = $_POST['totalcost'];

$item1name = $_POST['hello'];
$item1price = $_POST['12'];
$bsqtydiv = $_POST['13'];
$item2name = $_POST['14'];
$item2price = $_POST['15'];
$lsaqtydiv = $_POST['16'];
$item3name = $_POST['17'];
$item3price = $_POST['18'];
$lsbqtydiv = $_POST['19'];
$item4name = $_POST['20'];
$item4price = $_POST['21'];
$lscqtydiv = $_POST['22'];
$item5name = $_POST['23'];
$item5price = $_POST['24'];
$dsaqtydiv = $_POST['25'];
$item6name = $_POST['26'];
$item6price = $_POST['27'];
$botdqtydiv = $_POST['28'];
$orderdate = $_POST['29'];
$orderaddress = $_POST['30'];
$totalcost = $_POST['31'];



<input type="number" name="data1" id="data1">
<input type="text" name="data2" id="data2">
<input type="number" name="data3" id="data3">
<input type="number" name="data4" id="data4">
<input type="text" name="data5" id="data5">
<input type="number" name="data6" id="data6">
<input type="number" name="data7" id="data7">
<input type="text" name="data8" id="data8">
<input type="number" name="data9" id="data9">
<input type="number" name="data10" id="data10">
<input type="text" name="data11" id="data11">
<input type="number" name="data12" id="data12">
<input type="number" name="data13" id="data13">
<input type="text" name="data14" id="data14">
<input type="number" name="data15" id="data15">
<input type="number" name="data16" id="data16">
<input type="text" name="data17" id="data17">
<input type="number" name="data18" id="data18">
<input type="number" name="data19" id="data19">
<input type="text" name="data20" id="data20">
<input type="text" name="data21" id="data21">
<input type="number" name="data22" id="data22">
<input type="text" name="data23" id="data23">
<input type="text" name="data24" id="data24">*/




//$insert = mysqli_query($dbconn,"INSERT INTO Orders(orderid, item1name, item1price, item1quantity, item2name, item2price, item2quantity, item3name, item3price, item3quantity, item4name, item4price, item4quantity, item5name, item5price, item5quantity, item6name, item6price, item6quantity, deliverydate, deliveryaddress, totalcost, paymentstatus, customeremail) VALUES(1, '$item1name', '$item1price', '$bsqtydiv', '$item2name', '$item2price', '$lsaqtydiv', '$item3name', '$item3price', '$lsbqtydiv', '$item4name', '$item4price', '$lscqtydiv', '$item5name', '$item5price', '$dsaqtydiv', '$item6name', '$item6price', '$botdqtydiv', '$orderdate', '$orderaddress', '$totalcost', 2, 3)");
//$insert = mysqli_query($dbconn,"INSERT INTO Orders(orderid, item1name, item1price, item1quantity, item2name, item2price, item2quantity, item3name, item3price, item3quantity, item4name, item4price, item4quantity, item5name, item5price, item5quantity, item6name, item6price, item6quantity, deliverydate, deliveryaddress, totalcost, paymentstatus, customeremail) VALUES('$data1', '$data2', '$data3', '$data4', '$data5', '$data6', '$data7', '$data8', '$data9', '$data10', '$data11', '$data12', '$data13', '$data14', '$data15', '$data16', '$data17', '$data18', '$data19', '$data20', '$data21', '$data22', '$data23', '$data24')");
/*
if(!$insert)
{
	echo mysqli_error();
}
else
{
	echo "Records added successfully.";
}

mysqli_close($dbconn);*/

?>
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
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="bsqtydiv" name="bsqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="bstotal" name="bstotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem2">
					<img id="sbimg" src="img/smalllunchA.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item2name" name="item2name">Lunch Set A</li>
						<li id="item2price" name="item2price">Cost: RM24.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="lsaqtydiv" name="lsaqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="lsatotal" name="lsatotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem3">
					<img id="sbimg" src="img/smalllunchB.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item3name" name="item3name">Lunch Set B</li>
						<li id="item3price" name="item3price">Cost: RM28.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="lsbqtydiv" name="lsbqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="lsbtotal" name="lsbtotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem4">
					<img id="sbimg" src="img/smalllunchC.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item4name" name="item4name">Lunch Set C (100% Vegan Friendly)</li>
						<li id="item4price" name="item4price">Cost: RM22.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="lscqtydiv" name="lscqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="lsctotal" name="lsctotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem5">
					<img id="sbimg" src="img/smalldinner.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item5name" name="item5name">Dinner Set A</li>
						<li id="item5price" name="item5price">Cost: RM35.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="dsaqtydiv" name="dsaqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="dsatotal" name="dsatotal"></div></li>
					</ul>
				</div>
				
				<div id="sbcontaineritem6">
					<img id="sbimg" src="img/smallbeverages.jpg" alt="Item Image" height="100px"/>
					<ul id="sbdetails">							
						<li id="item6name" name="item6name">Beverage of the day</li>
						<li id="item6price" name="item6price">Cost: RM10.99</li>
						<li id="sbdetailline">Quantity Selected:&nbsp <div id="botdqtydiv" name="botdqtydiv"></div></li>
						<li id="sbdetailline">Total Cost: RM<div id="botdtotal" name="botdtotal"></div></li>
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
					<form action="payment.php" method="post">						
						<button id="sbtkbutton" type="submit">Submit Booking To Kitchen</button>
					</form>
				</div>
			</div>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>