<?php
	session_start();
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	if(isset($_SESSION["id"]))
	{
		$result = mysqli_query($conn, "SELECT * FROM Customers WHERE customer_id='" . $_SESSION["id"] . "'");
	}
	$row = mysqli_fetch_array($result);
	$email = $row['customer_email'];
	$orderresult = mysqli_query($conn, "SELECT * FROM Orders WHERE customeremail='" . $email . "'");
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
					<th>Action</th>
				</tr>

				<?php
					$rownum = mysqli_num_rows($orderresult);
					
					if(!$rownum != 0)
					{
						echo "<td colspan='4'><center>No Order data found!</center></td>";
					}
					else
					{
						while ($orderrow = mysqli_fetch_array($orderresult))
						{
							echo "<tr>";
							echo "<td>".$orderrow['orderid']."</td>";
							echo "<td>".$orderrow['deliverydate']."</td>";
							echo "<td>RM ".$orderrow['totalcost']."</td>";
							if($orderrow['orderstatus'] == 'confirmed' || $orderrow['orderstatus'] == 'delivered')
								{
									echo "<td style='color:green;'>".$orderrow['orderstatus']."</td>";
								}
								else
								{
									echo "<td style='color:red;'>".$orderrow['orderstatus']."</td>";
								}
							echo '<td><a href="orderstatus.php?order_id='.$orderrow['orderid'].'" id="vieworder">view</a></td>';
							echo "</tr>";
						}
					}
				?>
			</table>
			<br>
			<button id="signup"><a href="profile.php">Go back to your profile</a></button>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>