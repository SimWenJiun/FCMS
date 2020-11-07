<?php

//main connection file for both admin & front end
$servername = "sql12.freesqldatabase.com"; //server
$username = "sql12369317"; //username
$password = "KGUuPpDYfu"; //password
$dbname = "sql12369317";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>