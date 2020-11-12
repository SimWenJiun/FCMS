<?php
	session_start();
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - View order"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - View order</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="vieworderbody">
			<h1>Clients' Orders</h1>
			<hr><br>
			<p>Table showing clients' orders that are either "pending" or "confirmed".</p>
			<table id="orderhistory">
				<tr>
					<th>Order ID</th>
					<th>Customer</th>
					<th>Price Paid</th>
					<th>Date</th>
					<th>Order Status</th>
					<th>Action</th>
				</tr>

				<?php
					$query = "SELECT * FROM Orders";
					$result = mysqli_query($conn, $query);
					$rownum = mysqli_num_rows($result);
					
					if(!$rownum != 0)
					{
						echo "<td colspan='6'><center>No Order data found!</center></td>";
					}
					else
					{	
						while ($row = mysqli_fetch_array($result))
						{
							if($row['orderstatus'] == 'confirmed' || $row['orderstatus'] == 'pending')
							{
								echo "<tr>";
								echo "<td>".$row['orderid']."</td>";
								echo "<td>".$row['customeremail']."</td>";
								echo "<td>RM ".$row['totalcost']."</td>";
								echo "<td>".$row['deliverydate']."</td>";
								if($row['orderstatus'] == 'confirmed')
								{
									echo "<td style='color:green;'>".$row['orderstatus']."</td>";
								}
								else
								{
									echo "<td style='color:red;'>".$row['orderstatus']."</td>";
								}
								echo '<td><a href="processorder.php?order_id='.$row['orderid'].'">View</a></td>';
								echo "</tr>";
							}
						}
					}
				?>
			</table>
			
			<br>
			<br>
			
			<p>Table showing clients' orders that are either "delivered" or "cancelled".</p>
			<table id="orderhistory">
				<tr>
					<th>Order ID</th>
					<th>Customer</th>
					<th>Price Paid</th>
					<th>Date</th>
					<th>Order Status</th>
					<th>Action</th>
				</tr>

				<?php
					$query = "SELECT * FROM Orders";
					$result = mysqli_query($conn, $query);
					$rownum = mysqli_num_rows($result);
					
					if(!$rownum != 0)
					{
						echo "<td colspan='6'><center>No Order data found!</center></td>";
					}
					else
					{	
						while ($row = mysqli_fetch_array($result))
						{
							if($row['orderstatus'] == 'delivered' || $row['orderstatus'] == 'cancelled')
							{
								echo "<tr>";
								echo "<td>".$row['orderid']."</td>";
								echo "<td>".$row['customeremail']."</td>";
								echo "<td>RM ".$row['totalcost']."</td>";
								echo "<td>".$row['deliverydate']."</td>";
								if($row['orderstatus'] == 'delivered')
								{
									echo "<td style='color:green;'>".$row['orderstatus']."</td>";
								}
								else
								{
									echo "<td style='color:red;'>".$row['orderstatus']."</td>";
								}
								echo '<td><a href="processorder.php?order_id='.$row['orderid'].'">View</a></td>';
								echo "</tr>";
							}
						}
					}
				?>
			</table>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>