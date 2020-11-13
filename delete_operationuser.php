<?php
include("connection.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM Operation WHERE operation_id = '".$_GET['user_del']."'");
header("location:alloperationusers.php");  

?>
