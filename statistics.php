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
		<?php include('management_header.php');?>
		
		<div id="bodyhome">
			<h1>Statistics</h1>
			<br>
			<h2>Payment</h2>
			<br>
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