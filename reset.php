<?php
session_start();
$message="";
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Login"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Reset Password</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body">
			<div id="loginbox">
				<h1>Reset Password</h1>
				<img src="img/avatar.png" alt="User avatar" id="avatar">
				<form action="reset_password.php" method="post">
					<label for="login"><b>Email</b></label>
					<input type="text" name="email" id="login">
					
					<button type="submit" id="loginbut">Send Email</button>
					
				</form>
				<div class="message"><?php if($message!="") { echo $message; } ?></div>
			</div>
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>
	
</body>
</html>