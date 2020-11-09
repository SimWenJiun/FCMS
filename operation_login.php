<!DOCTYPE html>
<html lang="en" >
<?php
include("connection.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"])) 
     {
	$loginquery ="SELECT * FROM Operation WHERE username='$username' && password='".md5($password)."'";
	$result=mysqli_query($db, $loginquery);
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))
								{
                                    	$_SESSION["operation_id"] = $row['operation_id'];
										 header("refresh:1;url=operation_dashboard.php");
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!";
                                }
	 }
	
	
}

if(isset($_POST['submit1'] ))
{
     if(empty($_POST['cr_user']) || 
		empty($_POST['cr_pass']) ||  
		empty($_POST['cr_cpass']))
		{
			$message = "ALL fields must be fill";
		}
	else
	{
		
	
	$check_username= mysqli_query($db, "SELECT username FROM Operation where username = '".$_POST['cr_user']."' ");

	
	if($_POST['cr_pass'] != $_POST['cr_cpass']){
       	$message = "Password not match";
    }
	elseif(mysqli_num_rows($check_username) > 0)
     {
    	$message = 'username Already exists!';
     }
	elseif(mysqli_num_rows($check_email) > 0)
     {
    	$message = 'Email Already exists!';
     }
	 
	else{
       $mql = "INSERT INTO Operation (username,password) VALUES ('".$_POST['cr_user']."','".md5($_POST['cr_pass'])."')";
								mysqli_query($db, $mql);
									$success = "Operation Team Added successfully!";
	}

}
}
?>

<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">

  
</head>

<body>

  
<div class="container">
  <div class="info">
    <h1>Operation </h1><span> login Account</span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="images/manager.png"/></div>
  
  <form class="register-form" action="operation_login.php" method="post">
    <input type="text" placeholder="username" name="cr_user"/>
	 <input type="password" placeholder="password"  name="cr_pass"/>
	  <input type="password" placeholder="Confirm password"  name="cr_cpass"/>
   <input type="submit"  name="submit1" value="Create" />
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  
  <span style="color:red;"><?php echo $message; ?></span>
   <span style="color:green;"><?php echo $success; ?></span>
  <form class="login-form" action="operation_login.php" method="post">
    <input type="text" placeholder="username" name="username"/>
    <input type="password" placeholder="password" name="password"/>
    <input type="submit"  name="submit" value="login" />
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
  
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='script/operation_login.js'></script>
  

    



</body>

</html>
