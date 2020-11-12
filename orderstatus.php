<?php
	session_start();
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Order Status"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Order Status</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		<?php
			$query = "SELECT * FROM Orders WHERE orderid='".$_GET['order_id']."'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
		?>
		<div id="statusbody">
			<h1>Order Detail<h1>
			<hr><br>
			<p><span class="statustitle">Order ID:</span><br>
			<span class="statuscontent"><?php echo $row["orderid"]; ?></span></p>
			<p><span class="statustitle">Date of Delivery:</span><br>
			<span class="statuscontent"><?php echo $row["deliverydate"]; ?></span></p>
			<p><span class="statustitle">Delivery Address:</span><br>
			<span class="statuscontent"><?php echo $row["deliveryaddress"]; ?></span></p>
			<p><span class="statustitle">Ordered Items:</span><br>
			<ul>
				<li><span class="statuscontent"><?php echo $row['item1name'] . " x " . $row['item1quantity']; ?></span></li>
				<li><span class="statuscontent"><?php echo $row['item2name'] . " x " . $row['item2quantity']; ?></span></li>
				<li><span class="statuscontent"><?php echo $row['item3name'] . " x " . $row['item3quantity']; ?></span></li>
				<li><span class="statuscontent"><?php echo $row['item4name'] . " x " . $row['item4quantity']; ?></span></li>
				<li><span class="statuscontent"><?php echo $row['item5name'] . " x " . $row['item5quantity']; ?></span></li>
				<li><span class="statuscontent"><?php echo $row['item6name'] . " x " . $row['item6quantity']; ?></span></li>
			</ul>
			</p>
			<p><span class="statustitle">Price Paid:</span><br>
			<span class="statuscontent">RM <?php echo $row["totalcost"]; ?></span></p>
			<p><span class="statustitle">Order Status:</span><br>
			<span class="statuscontent"><?php echo $row["orderstatus"]; ?></span></p>
			<br>
			<button id="signup"><a href="orderhistory.php">Back to Order History</a></button>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>