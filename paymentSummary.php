<?php
	session_start();
	$selectionname1 = $_COOKIE["selectionname1"];
	$selectionprice1 = $_COOKIE["selectionprice1"];
	$selectionquantity1 = $_COOKIE["selectionquantity1"];
	$selectiontotal1 = $selectionprice1 * (int)$selectionquantity1;

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
?>
<html lang="en">
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Menu"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>FoodeEdge Gourmet - Menu</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		<div id="body" class="row">
		
		
			
		<div class="col-25">
			<div class="ReceiptT">
				<h1>Receipt</h1>
			</div>
			<div class="container">
			<?php ?>
				<h4>Product
					<span class="price" style="color:black">
						<i class="fa fa-price"></i>
						<b>Price</b>
					</span>
				</h4>
				<?php if ($selectionquantity1 > 0) { ?>
				<p><?php echo "Breakfast Set" ?><span class="quantityPay"><?php echo "x", $selectionquantity1; ?></span> <span class="price"><?php echo "RM", $selectiontotal1; }?></span></p>
				<hr>
				<?php if ($selectionquantity2 > 0) { ?>
				<p><?php echo "Lunch Set A" ?> <span class="quantityPay"><?php echo "x", $selectionquantity2; ?></span><span class="price"><?php echo "RM", $selectiontotal2; }?></span></p>
				<hr>
				<?php if ($selectionquantity3 > 0) { ?>
				<p><?php echo "Lunch Set B" ?> <span class="quantityPay"><?php echo "x", $selectionquantity3; ?></span><span class="price"><?php echo "RM", $selectiontotal3; }?></span></p>
				<hr>
				<?php if ($selectionquantity4 > 0) { ?>
				<p><?php echo "Lunch Set C" ?> <span class="quantityPay"><?php echo "x", $selectionquantity4; ?></span><span class="price"><?php echo "RM", $selectiontotal4; }?></span></p>
				<hr>
				<?php if ($selectionquantity5 > 0) { ?>
				<p><?php echo "Dinner Set" ?> <span class="quantityPay"><?php echo "x", $selectionquantity5; ?></span><span class="price"><?php echo "RM", $selectiontotal5; }?></span></p>
				<hr>
				<?php if ($selectionquantity6 > 0) { ?>
				<p><?php echo "Beverage of the day" ?> <span class="quantityPay"><?php echo "x", $selectionquantity6; ?></span><span class="price"><?php echo "RM", $selectiontotal6; }?></span></p>
				<hr>
				<p>Total <span class="price" style="color:black"><b>RM<?php echo $total ?></b></span></p>
				</div>
			<?php ?>
			</div>
		</div>
		
		<?php include('footer.php');?>
		
	</body>
</html>
