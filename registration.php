<?php
$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["uname"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT customer_username FROM Customers WHERE customer_username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["uname"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["uname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["pword"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["pword"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["pword"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["cpword"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["cpword"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO Customers (customer_username, customer_password) VALUES (?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Login"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Login</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<header>
			<div id="logoholder"><a href="home.html"><img src="img/Logo.jpg" alt="FoodEdge Gourmet" id="logo"/></a></div>
			
			<div id="navigation">
				<div id="home"><a href="home.html">Home</a></div>
				
				<div id="menu">
					<ul>
						<li><a href="menupage.html">Food & Beverages Menu</a>
							<ul>							
								<li><a href="breakfastset.html">Breakfast Set</a></li>
								<li><a href="lunchseta.html">Lunch Set A</a></li>
								<li><a href="lunchsetb.html">Lunch Set B</a></li>
								<li><a href="lunchsetc.html">Lunch Set C</a></li>
								<li><a href="dinnerseta.html">Dinner Set A</a></li>
								<li><a href="beverageoftheday.html">Beverage of the day</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				<div id="selection"><a href="editselection.html">Selection</a></div>
				
				<div id="about"><a href="aboutus.html">About</a></div>
				
				<div id="profile"><a href="login.php">Login</a></div>
			</div>
		</header>
		
		<div id="regbody">
			<h1>User Registration</h1>
			<p>Welcome to FoodEdge Gourmet Food Catering service. Sign up for FoodEdge Gourmet user to receive benefits. The benefits are free gifts, discounts, vouchers etc. Membership status are Silver, Gold and Platinum. Membership status will be increased through purchases of catering service. The higher membership status will gives more benefits to the user.</p>
			<form action="home.html" method="post">
				<fieldset>
					<legend>Personal Information</legend>
					<label for="fname"><b>First Name</b></label><br>
					<input type="text" name="fname" id="fname"><br>
					
					<label for="lname"><b>Last Name</b></label><br>
					<input type="text" name="lname" id="lname"><br>
					
					<label for="gender"><b>Gender</b></label><br>
					<select name="gender" id="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select><br>
					
					<label for="birthday"><b>Birth Date</b></label><br>
					<input type="date" name="birthday" id="birthday"><br>
				</fieldset>
				
				<fieldset>
					<legend>Contact Information</legend>
					<label for="email"><b>Email</b></label><br>
					<input type="email" name="email" id="email"><br>
					
					<label for="phone"><b>Phone Number</b></label><br>
					<input type="tel" name="phone" id="phone" placeholder="+60123456789" pattern="^(\+601)[0-46-9]-*[0-9]{7,8}$"><br>
					
					<label for="address"><b>Address</b></label><br>
					<textarea name="address" id="address">Enter your address here...</textarea><br>
				</fieldset>
				
				<fieldset>
					<legend>Login Information</legend>
					<label for="uname"><b>Username</b></label><br>
					<input type="uname" name="uname" id="uname"><br>
					
					<label for="pword"><b>Password</b></label><br>
					<input type="password" name="pword" id="pword"><br>
					
					<label for="cpword"><b>Confirmed Password</b></label><br>
					<input type="password" name="cpword" id="cpword"><br>
				</fieldset>
				
				<button type="submit" id="signupbut">Sign Up</button>
			</form>
			<br>
			<br>
			<br>
		</div>
		
		<footer>
			<nav>
				<a href="privacypolicy.html">Privacy Policy | </a>
				<a href="contactus.html">Contact Us | </a>
				<a href="aboutus.html">About Us</a>
			</nav>
			
			<aside>© 2020 FoodEdge Gourmet. All Rights Reserved</aside>
		</footer>
	</body>
</html>
	
</body>
</html>