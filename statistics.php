<?php
session_start();
$message="";
$totalamt = 0;
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$result = mysqli_query($conn,"SELECT * FROM Customers");
	$cust  = mysqli_fetch_all($result);
	$result = mysqli_query($conn, "SELECT * FROM Orders");
	$order = mysqli_fetch_all($result);
	$result = mysqli_query($conn, "SELECT * FROM Payment");
	$payment = mysqli_fetch_all($result);
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Home"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Business Statistics</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="bodyhome">
			<h1>FoodEdge Gourmet Catering System</h1>
			
			<p id="homepageparagraph">
				FoodEdge Gourmet Catering focuses on food and beverage catering
				services for corporate, seminar, weddings and any events in Kuching
				for nearly 5 years. Our aim is to deliver outstanding service with
				a commitment to quality, safety and health whether in the workplace,
				schools and colleges, hospitals, at leisure, on the move or in remote
				environment.
			</p><br>
			
			<h2>Customers</h2>
			
			<p id="homepageparagraph">
				<table class="listborder">
					<tr>
						<th>
							<p>ID</p>
						</th>
						<th>
							<p>First Name</p>
						</th>
						<th>
							<p>Last Name</p>
						</th>
						<th>
							<p>Username</p>
						</th>
						<th>
							<p>Phone Number</p>
						</th>
						<th>
							<p>Email Address</p>
						</th>
						<th>
							<p>Address</p>
						</th>
						<th>
							<p>Membership Status</p>
						</th>
					</tr>
					<tr>
						<td>
							<?php foreach ($cust as $id) { echo "</br>", $id[0], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($cust as $fname) { echo "</br>", $fname[1], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($cust as $lname) { echo "</br>", $lname[2], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($cust as $uname) { echo "</br>", $uname[3], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($cust as $pnumber) { echo "</br>", $pnumber[4], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($cust as $email) { echo "</br>", $email[5], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($cust as $address) { echo "</br>", $address[7], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($cust as $membership) { echo "</br>", $membership[8], "</br></br>"; } ?>
						</td>
					</tr>
				</table>
			</p>
			
			<h2>Orders</h2>
			
			<p id="homepageparagraph">
				<table class="listborder">
					<tr>
						<th>
							<p>Order ID</p>
						</th>
						<th>
							<p>Customer ID</p>
						</th>
						<th>
							<p>Payment ID</p>
						</th>
						<th>
							<p>Menu Item</p>
						</th>
					</tr>
					<tr>
						<td>
							<?php foreach ($order as $orderid) { echo "</br>", $orderid[0], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($order as $custid) { echo "</br>", $custid[1], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($order as $paymentid) { echo "</br>", $paymentid[2], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($order as $items) { echo "</br>", $items[3], "</br></br>"; } ?>
						</td>
					</tr>
				</table>
			</p>
			
			<h2>Payment</h2>
			
			<p id="homepageparagraph">
				<table class="listborder">
					<tr>
						<th>
							<p>Payment ID</p>
						</th>
						<th>
							<p>Customer ID</p>
						</th>
						<th>
							<p>Payment Date</p>
						</th>
						<th>
							<p>Payment Method</p>
						</th>
						<th>
							<p>Payment Amount</p>
						</th>
					</tr>
					<tr>
						<td>
							<?php foreach ($payment as $paymentid) { echo "</br>", $paymentid[0], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($payment as $custid) { echo "</br>", $custid[1], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($payment as $paymentdate) { echo "</br>", $paymentdate[2], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($payment as $paymentmeth) { echo "</br>", $paymentmeth[3], "</br></br>"; } ?>
						</td>
						<td>
							<?php foreach ($payment as $paymentamt) { echo "</br>", $paymentamt[4], "</br></br>"; } ?>
						</td>
					</tr>
					<tr>
						<th colspan="4">
							<?php echo "Total" ?>
						</th>
						<td>
							<?php foreach ($payment as $paymentamt) { $totalamt += $paymentamt[4]; echo "</br>", $totalamt, "</br></br>"; } ?>
						</td>
					</tr>
				</table>
			</p>
			
			
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>