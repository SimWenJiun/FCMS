<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["operation"]);
unset($_SESSION["management"]);
header("Location:login.php");
?>
