<?php
session_start();
$message="";
$totalamt = 0;
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Home"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Management</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('management_header.php');?>
		
		<div id="bodyhome">
			<h1>FoodEdge Gourmet Catering System</h1>
			<br>
			<h2>Management Account <?php echo $_SESSION["management"] ?></h2>
			<br>
				<button id="signup"><a href="logout.php">Log Out</a></button>
			
			
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>