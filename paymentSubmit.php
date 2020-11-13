<?php
	$selectionprice1 = $_COOKIE["selectionprice1"];
	$selectionquantity1 = $_COOKIE["selectionquantity1"];
	$selectiontotal1 = (float)$selectionprice1 * (int)$selectionquantity1;

	$selectionprice2 = $_COOKIE["selectionprice2"];
	$selectionquantity2 = $_COOKIE["selectionquantity2"];
	$selectiontotal2 = (float)$selectionprice2 * (int)$selectionquantity2;

	$selectionprice3 = $_COOKIE["selectionprice3"];
	$selectionquantity3 = $_COOKIE["selectionquantity3"];
	$selectiontotal3 = (float)$selectionprice3 * (int)$selectionquantity3;

	$selectionprice4 = $_COOKIE["selectionprice4"];
	$selectionquantity4 = $_COOKIE["selectionquantity4"];
	$selectiontotal4 = (float)$selectionprice4 * (int)$selectionquantity4;

	$selectionprice5 = $_COOKIE["selectionprice5"];
	$selectionquantity5 = $_COOKIE["selectionquantity5"];
	$selectiontotal5 = (float)$selectionprice5 * (int)$selectionquantity5;

	$selectionprice6 = $_COOKIE["selectionprice6"];
	$selectionquantity6 = $_COOKIE["selectionquantity6"];
	$selectiontotal6 = (float)$selectionprice6 * (int)$selectionquantity6;

	$total = $selectiontotal1 + $selectiontotal2 + $selectiontotal3 + $selectiontotal4 + $selectiontotal5 + $selectiontotal6;
	
	$name = $_POST["customer_name"];
	$email = $_POST["customer_email"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$cName = $_POST["card_name"];
	$cNumber = $_POST["card_number"];
	$eMonth = $_POST["expiry_month"];
	$eYear = $_POST["expiry_year"];
	$cvv = $_POST["cvv"];
	$pdate = date("Y-m-d");
	
	$customer_id = mysqli_query($conn,"SELECT * FROM Customers WHERE customer_id='" . $_SESSION["id"] . "'");

	//to connect to db
	$dbconn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");

	if(!$dbconn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	$insert = mysqli_query($dbconn,
	"INSERT INTO Payment
	(
		customer_id,
		customer_name,
		customer_email,
		address,
		city,
		state,
		zip,
		payment_method,
		card_name,
		card_number,
		expiry_month,
		expiry_year,
		cvv,
		payment_date,
		payment_amount
	) 

	VALUES
	(	
		'$customer_id', 
		'$name',
		'$email',
		'$address',
		'$city',
		'$state',
		'$zip',
		'credit card',
		'$cName',
		'$cNumber',
		'$eMonth',
		'$eYear',
		'$cvv',
		'$pdate',
		'$total'
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
	header("Location:paymentConfirmation.php");
?>