<?php
	session_start();
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	if(isset($_SESSION["id"]))
	{
		$result = mysqli_query($conn, "SELECT * FROM Orders WHERE customer_id='" . $_SESSION["id"] . "'");
	}
	$result;
	$message = "";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - typehere"/><!-- CHANGE CONTENT "typehere" PART TO PAGE NAME -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - typehere</title><!-- CHANGE TITLE "typehere" PART TO PAGE NAME -->
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="historybody">
			<h1>Order History</h1>
			<hr><br>
			<table id="orderhistory">
				<tr>
					<th>Order ID</th>
					<th>Date</th>
					<th>Price Paid</th>
					<th>Order Status</th>
				</tr>
				<tr>
					<td>2268</td>
					<td>16/11/2020</td>
					<td>RM 87.96</td>
					<td>Confirmed</td>
				</tr>
				<tr>
					<td>2140</td>
					<td>2/11/2020</td>
					<td>RM 129.99</td>
					<td>Delivered</td>
				</tr>
								<tr>
					<td>1687</td>
					<td>31/10/2020</td>
					<td>RM 29.99</td>
					<td>Delivered</td>
				</tr>
								<tr>
					<td>1548</td>
					<td>25/10/2020</td>
					<td>RM 59.99</td>
					<td>Delivered</td>
				</tr>
			<!--?php
				while ($row = $result -> fetch_row())
				{
					echo "<tr>";
					echo "<td>".$row[0]."</td>";
					echo "<td>".$row[4]."</td>";
					echo "<td>RM ".$row[2]."</td>";
					echo "<td>".$row[5]."</td>";
					echo "</tr>";
				}
				/*
				if (empty($row))
				{
					$message = "<p>No order records found!</p>";
				}
				echo $message;
				*/
			?-->
			</table>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>