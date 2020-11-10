<?php
session_start();
$message="";
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
		
		<div id="regbody">
			<h1>FoodEdge Gourmet Catering System Management</h1>
			<br>
			<h2>Add Management Account</h2>
			<br>
			<form action="add_management.php" method="post">
					<label for="fname"><b>Username</b></label><br>
					<input type="text" name="uname" id="uname"><br>
					
					<label for="lname"><b>Password</b></label><br>
					<input type="text" name="pword" id="pword"><br>
					
				
				<button type="submit" id="signupbut">Add</button>
				<div class="message"><?php if($message!="") { foreach ($message as $err) { echo $err, '<br/>'; } } ?></div>
			</form>
			<br>
			<h2>Add Operation Account</h2>
			<br>
			<form action="add_operation.php" method="post">
					<label for="fname"><b>Username</b></label><br>
					<input type="text" name="uname" id="uname"><br>
					
					<label for="lname"><b>Password</b></label><br>
					<input type="text" name="pword" id="pword"><br>
					
				
				<button type="submit" id="signupbut">Add</button>
				<div class="message"><?php if($message!="") { foreach ($message as $err) { echo $err, '<br/>'; } } ?></div>
			</form>
			
			
			
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>