<?php
	session_start();
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	$start = date("Y-m-01");
	$end = date("Y-m-t");
	$monthname = date("F", mktime(0, 0, 0, date("m"), 10));
	$monthsorderresult = mysqli_query($conn, "SELECT * FROM Orders WHERE dateplaced BETWEEN '$start' AND '$end'");
	$monthsorder = mysqli_fetch_all($monthsorderresult);
	$ordersplaced = mysqli_num_rows($monthsorderresult);
	
	$item1qty = 0;
	$item1total = 0;
	$item2qty = 0;
	$item2total = 0;
	$item3qty = 0;
	$item3total = 0;
	$item4qty = 0;
	$item4total = 0;
	$item5qty = 0;
	$item5total = 0;
	$item6qty = 0;
	$item6total = 0;
	$item1costtomake = $_GET["item1costtomake"];
	$item2costtomake = $_GET["item2costtomake"];
	$item3costtomake = $_GET["item3costtomake"];
	$item4costtomake = $_GET["item4costtomake"];
	$item5costtomake = $_GET["item5costtomake"];
	$item6costtomake = $_GET["item6costtomake"];
	$costperdelivery = $_GET["costperdelivery"];
	
	foreach ($monthsorder as $data) 
	{ 
		$item1total = $item1total + ($data[2] * $data[3]);
		$item1qty = $item1qty + $data[3];
		$item2total = $item2total + ($data[5] * $data[6]);
		$item2qty = $item2qty + $data[6];
		$item3total = $item3total + ($data[8] * $data[9]);
		$item3qty = $item3qty + $data[9];
		$item4total = $item4total + ($data[11] * $data[12]);
		$item4qty = $item4qty + $data[12];
		$item5total = $item5total + ($data[14] * $data[15]);
		$item5qty = $item5qty + $data[15];
		$item6total = $item6total + ($data[17] * $data[18]);
		$item6qty = $item6qty + $data[18];	
	}
?>



<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Home"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Home</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="bodyhome">
			<h1>Monthly Profit or Loss</h1>
			</br>
			<table id="MonthlyPL">
				<thead>
				  <tr>
					<th>Menu Item Name</th>
					<th>Total Quantity Ordered</th>
					<th>Total Cost To Make (RM)</th>
					<th>Total Charged (RM)</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>Breakfast Set</td>
					<td><?php echo $item1qty?></td>
					<td><?php echo $item1costtomake*$item1qty?></td>
					<td><?php echo $item1total?></td>
				  </tr>
				  <tr>
					<td>Lunch Set A</td>
					<td><?php echo $item2qty?></td>
					<td><?php echo $item2costtomake*$item2qty?></td>
					<td><?php echo $item2total?></td>
				  </tr>
				  <tr>
					<td>Lunch Set B</td>
					<td><?php echo $item3qty?></td>
					<td><?php echo $item3costtomake*$item3qty?></td>
					<td><?php echo $item3total?></td>
				  </tr>
				  <tr>
					<td>Lunch Set C</td>
					<td><?php echo $item4qty?></td>
					<td><?php echo $item4costtomake*$item4qty?></td>
					<td><?php echo $item4total?></td>
				  </tr>
				  <tr>
					<td>Dinner Set A</td>
					<td><?php echo $item5qty?></td>
					<td><?php echo $item5costtomake*$item5qty?></td>
					<td><?php echo $item5total?></td>
				  </tr>
				  <tr>
					<td>Beverage Of The Day</td>
					<td><?php echo $item6qty?></td>
					<td><?php echo $item6costtomake*$item6qty?></td>
					<td><?php echo $item6total?></td>
				  </tr>
				</tbody>
			</table>
			</br>
			
			<table id="MonthlyPLFinal">
				<tr>
					<td>Total Orders Placed (RM)</td>
					<td><?php echo $ordersplaced ?></td>
				</tr>
				<tr>
					<td>Cost Per Delivery (RM)</td>
					<td><?php echo $costperdelivery ?></td>
				</tr>
				<tr>
					<td>Total Delivery Cost (RM)</td>
					<td><?php echo $costperdelivery * $ordersplaced ?></td>
				</tr>
				<tr>
					<td><b>Monthly Profit or Loss (RM)</b></td>
					<td><b><?php echo 
						($item1total - ($item1costtomake*$item1qty)) +
						($item2total - ($item2costtomake*$item2qty)) +
						($item3total - ($item3costtomake*$item3qty)) +
						($item4total - ($item4costtomake*$item4qty)) +
						($item5total - ($item5costtomake*$item5qty)) +
						($item6total - ($item6costtomake*$item6qty)) - 
						($costperdelivery * $ordersplaced)?></b>
					</td>
				</tr>
			</table>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>