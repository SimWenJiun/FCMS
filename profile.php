<?php
session_start();
$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
if(isset($_SESSION["id"])) {
	$result = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_id='" . $_SESSION["id"] . "'");
}
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - typehere"/><!-- CHANGE CONTENT "typehere" PART TO PAGE NAME -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - typehere</title><!-- CHANGE TITLE "typehere" PART TO PAGE NAME -->
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		

		<div id="profilebody">
		<?php if (mysqli_num_rows($result) >0) {
				$row = mysqli_fetch_array($result) ?>
			<h1>Hi <?php echo $row["customer_firstname"]; ?>,</h1>
			<p id="profdesc">Welcome to your FoodEdge Gourmet Profile page.</p>
			<div id="profcontainer">
				<div id="profmember">
					<h2>Membership</h2>
					<hr>
					<p><span class="proftitle">Member ID:</span><br>
					<span class="profcontent"><?php echo $row["customer_id"]; ?></span></p>
					<p><span class="proftitle">Membership status:</span><br>
					<span class="profcontent"><?php echo $row["membership_status"]; ?></span></p>
					<p><span class="proftitle">Username:</span><br>
					<span class="profcontent"><?php echo $row["customer_username"]; ?></span></p>
				</div>
				<br>
				<div id="profabout">
					<h2>About</h2>
					<hr>
					<p><span class="proftitle">First Name:</span><br>
					<span class="profcontent"><?php echo $row["customer_firstname"]; ?></span></p>
					<p><span class="proftitle">Last Name:</span><br>
					<span class="profcontent"><?php echo $row["customer_lastname"]; ?></span></p>
				</div>
				<br>
				<div id="profcontact">
					<h2>Contact</h2>
					<hr>
					<p><span class="proftitle">Email:</span><br>
					<span class="profcontent"><?php echo $row["customer_email"]; ?></span></p>
					<p><span class="proftitle">Phone:</span><br>
					<span class="profcontent"><?php echo $row["customer_phone"]; ?></span></p>
					<p><span class="proftitle">Address:</span><br>
					<span class="profcontent"><?php echo $row["customer_address"]; ?></span></p>
				</div>
				<br>
				<button id="signup"><a href="orderhistory.php">View your orders</a></button>
				<button id="signup"><a href="logout.php">Log Out</a></button>
			</div>
		<?php }
		?>
		</div>	
		
		
		<?php include('footer.php');?>
	</body>
</html>