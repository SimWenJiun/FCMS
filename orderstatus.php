<?php
	session_start();
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	if(isset($_SESSION["id"]))
	{
		$result = mysqli_query($conn, "SELECT * FROM Orders WHERE customer_id='" . $_SESSION["id"] . "'");
	}
	$result;
	$row;
	$message = "";

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
		<!--?php
			if (mysqli_num_rows($result) > 0) 
			{
				$row = mysqli_fetch_array($result);
			}
		?-->
		<div id="statusbody">
			<h1>Your Current Order Detail<h1>
			<hr><br>
			<p><span class="statustitle">Order ID:</span><br>
			<span class="statuscontent">2268</span><!--?php echo $row["order_id"]; ?--></p>
			<p><span class="statustitle">Date of Delivery:</span><br>
			<span class="statuscontent">16/11/2020</span><!--?php echo $row["order_date"]; ?--></p>
			<p><span class="statustitle">Ordered Items:</span><br>
			<ul>
				<li><span class="statuscontent">Lunch Set A</span></li>
				<li><span class="statuscontent">Lunch Set B</span></li>
				<li><span class="statuscontent">Lunch Set C</span></li>
				<li><span class="statuscontent">Beverage of the day</span></li>
			</ul>
			<!--?php echo $row["menu_item"]; ?--></p>
			<p><span class="statustitle">Price Paid:</span><br>
			<span class="statuscontent">RM 87.96</span><!--?php echo $row["payment_id"]; ?--></p>
			<p><span class="statustitle">Order Status:</span><br>
			<span class="statuscontent">Comfirmed</span><!--?php echo $row["order_status"]; ?--></p>
			<br>
			<button id="signup"><a href="orderhistory.php">View Order History</a></button>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>