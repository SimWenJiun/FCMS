<?php
session_start();
	$selectionname1 = $_COOKIE["selectionname1"];
	$selectionprice1 = $_COOKIE["selectionprice1"];
	$selectionquantity1 = $_COOKIE["selectionquantity1"];
	$selectiontotal1 = (float)$selectionprice1 * (int)$selectionquantity1;

	$selectionname2 = $_COOKIE["selectionname2"];
	$selectionprice2 = $_COOKIE["selectionprice2"];
	$selectionquantity2 = $_COOKIE["selectionquantity2"];
	$selectiontotal2 = (float)$selectionprice2 * (int)$selectionquantity2;

	$selectionname3 = $_COOKIE["selectionname3"];
	$selectionprice3 = $_COOKIE["selectionprice3"];
	$selectionquantity3 = $_COOKIE["selectionquantity3"];
	$selectiontotal3 = (float)$selectionprice3 * (int)$selectionquantity3;

	$selectionname4 = $_COOKIE["selectionname4"];
	$selectionprice4 = $_COOKIE["selectionprice4"];
	$selectionquantity4 = $_COOKIE["selectionquantity4"];
	$selectiontotal4 = (float)$selectionprice4 * (int)$selectionquantity4;

	$selectionname5 = $_COOKIE["selectionname5"];
	$selectionprice5 = $_COOKIE["selectionprice5"];
	$selectionquantity5 = $_COOKIE["selectionquantity5"];
	$selectiontotal5 = (float)$selectionprice5 * (int)$selectionquantity5;

	$selectionname6 = $_COOKIE["selectionname6"];
	$selectionprice6 = $_COOKIE["selectionprice6"];
	$selectionquantity6 = $_COOKIE["selectionquantity6"];
	$selectiontotal6 = (float)$selectionprice6 * (int)$selectionquantity6;

	$orderdeliverydate = $_COOKIE["orderdeliverydate"];
	$orderdeliveryaddress = $_COOKIE["orderdeliveryaddress"];
	$total = $selectiontotal1 + $selectiontotal2 + $selectiontotal3 + $selectiontotal4 + $selectiontotal5 + $selectiontotal6;
	
	$orderplaceddate = date("Y-m-d");
	$orderplacedtime = date("H:i");
	
	if(isset($_SESSION["email"]))
	{
	
		$customeremail = $_SESSION["email"];
		
		//to connect to db
		$dbconn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");

		if(!$dbconn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}

		$insert = mysqli_query($dbconn,
		"INSERT INTO Orders
		( 
			item1name, 
			item1price, 
			item1quantity, 
			item2name, 
			item2price, 
			item2quantity, 
			item3name, 
			item3price, 
			item3quantity, 
			item4name, 
			item4price, 
			item4quantity, 
			item5name, 
			item5price, 
			item5quantity, 
			item6name, 
			item6price, 
			item6quantity, 
			deliverydate, 
			deliveryaddress, 
			totalcost, 
			paymentstatus, 
			customeremail,
			orderstatus,
			dateplaced,
			timeplaced
		) 

		VALUES
		(
			'$selectionname1', 
			'$selectionprice1', 
			'$selectionquantity1', 
			'$selectionname2', 
			'$selectionprice2', 
			'$selectionquantity2', 
			'$selectionname3', 
			'$selectionprice3', 
			'$selectionquantity3', 
			'$selectionname4', 
			'$selectionprice4', 
			'$selectionquantity4', 
			'$selectionname5', 
			'$selectionprice5', 
			'$selectionquantity5', 
			'$selectionname6', 
			'$selectionprice6', 
			'$selectionquantity6', 
			'$orderdeliverydate', 
			'$orderdeliveryaddress', 
			'$total',
			'unpaid',
			'$customeremail',
			'pending',
			'$orderplaceddate',
			'$orderplacedtime'
		)");

		if(!$insert)
		{
			echo mysqli_error();
		}
		else
		{
			echo "Records added successfully.";
		}

		mysqli_close($dbconn);
		header("Location:payment.php");
	}
	else
	{
		echo "<script>alert('Please Login To Submit Booking'); window.location = 'login.php';</script>";
	}
?>