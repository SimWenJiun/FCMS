<?php
	session_start();
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Process order"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Process order</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="processorderbody">
			<h1>Process Order</h1>
			<hr><br>
			<table id="orderhistory">
				<?php
					$query = "SELECT * FROM Orders WHERE orderid='".$_GET['order_id']."'";
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);
					$id = $row['orderid'];
				?>
				<tr>
					<th>Order ID</th>
					<td><?php echo $row['orderid']; ?></td>
				</tr>
				<tr>
					<th>Customer Email</th>
					<td><?php echo $row['customeremail']; ?></td>
				</tr>
				<tr>
					<th>Items</th>
					<td>
					<?php
						echo "<ul>";
						echo "<li>".$row['item1name']." x ".$row['item1quantity']."</li>";
						echo "<li>".$row['item2name']." x ".$row['item2quantity']."</li>";
						echo "<li>".$row['item3name']." x ".$row['item3quantity']."</li>";
						echo "<li>".$row['item4name']." x ".$row['item4quantity']."</li>";
						echo "<li>".$row['item5name']." x ".$row['item5quantity']."</li>";
						echo "<li>".$row['item6name']." x ".$row['item6quantity']."</li>";
						echo "</ul>";
					?>
					</td>
				</tr>
				<tr>
					<th>Price</th>
					<td>RM <?php echo $row['totalcost']; ?></td>
				</tr>
				<tr>
					<th>Delivery Date</th>
					<td><?php echo $row['deliverydate']; ?></td>
				</tr>
				<tr>
					<th>Delivery Address</th>
					<td><?php echo $row['deliveryaddress']; ?></td>
				</tr>
				<tr>
					<th>Payment Status</th>
					<td><?php echo $row['paymentstatus']; ?></td>
				</tr>
				<tr>
					<th>Order Status</th>
					<td>
						<form action="processingorder.php" method="post">
						<?php
							$ostatus = $row['orderstatus'];
							if ($ostatus == 'pending')
							{
								echo '<select name="status" required="required">';
								echo '<option value="pending" selected>pending</option>';
								echo '<option value="confirmed">confirmed</option>';
								echo '<option value="delivered">delivered</option>';
								echo '<option value="cancelled">cancelled</option>';
								echo '</select>';
							}
							else if ($ostatus == 'confirmed')
							{
								echo '<select name="status" required="required">';
								echo '<option value="pending">pending</option>';
								echo '<option value="confirmed" selected>confirmed</option>';
								echo '<option value="delivered">delivered</option>';
								echo '<option value="cancelled">cancelled</option>';
								echo '</select>';								
							}
							else if ($ostatus == 'delivered')
							{
								echo '<select name="status" required="required">';
								echo '<option value="pending">pending</option>';
								echo '<option value="confirmed">confirmed</option>';
								echo '<option value="delivered" selected>delivered</option>';
								echo '<option value="cancelled">cancelled</option>';
								echo '</select>';								
							}
							else if ($ostatus == 'cancelled')
							{
								echo '<select name="status" required="required">';
								echo '<option value="pending">pending</option>';
								echo '<option value="confirmed">confirmed</option>';
								echo '<option value="delivered">delivered</option>';
								echo '<option value="cancelled" selected>cancelled</option>';
								echo '</select>';							
							}
							else
							{
								echo '<select name="status" required="required">';
								echo '<option value="" selected></option>';
								echo '<option value="pending">pending</option>';
								echo '<option value="confirmed">confirmed</option>';
								echo '<option value="delivered">delivered</option>';
								echo '<option value="cancelled">cancelled</option>';
								echo '</select>';							
							}
						?>
						<input type="submit" name="update" value="Update">
						<input type="hidden" name="orderid" value="<?php echo $id;?>">
						</form>
					</td>
				</tr>
			</table>
		</div>
		
		<?php include('footer.php');?>
		
		<script language="javascript" type="text/javascript">
			var popUpWin=0;
			function popUpWindow(URLStr)
			{
				if(popUpWin)
				{
					if(!popUpWin.closed)
					{
						popUpWin.close();
					}
				}
				popUpWin = open(URLStr);
			}
		</script>
	</body>
</html>