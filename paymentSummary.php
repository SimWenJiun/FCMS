<?php
session_start();
$total = $_COOKIE["total"];
$bsqty = $_SESSION['bsqty'];
$lsaqty = $_SESSION['lsaqty'];
$lsbqty = $_SESSION['lsbqty'];
$lscqty = $_SESSION['lscqty'];
$dsaqty = $_SESSION['dsaqty'];
$botdqty = $_SESSION['botdqty'];
$bstotal = $_COOKIE["bstotal"];
$lsatotal = $_COOKIE["lsatotal"];
$lsbtotal = $_COOKIE["lsbtotal"];
$lsctotal = $_COOKIE["lsctotal"];
$dsatotal = $_COOKIE["dsatotal"];
$botdtotal = $_COOKIE["botdtotal"];
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
		
		<div class="ReceiptT">
			<h1>Receipt</h1>
		</div>
			
		<div class="col-25">
			<div class="container">
			<?php ?>
				<h4>Product
					<span class="quantityPay" style="color:black">
						<i class="fa fa-qty"></i>
						<b>Quantity</b>
					</span>
					<span class="price" style="color:black">
						<i class="fa fa-price"></i>
						<b>Price</b>
					</span>
				</h4>
				<?php if ($bsqty > 0) { ?>
				<p><?php echo "Breakfast Set" ?><span class="quantityPay"><?php echo $bsqty; }?></span> <span class="price"><?php echo "RM", $bstotal; }?></span></p>
				<hr>
				<?php if ($lsaqty > 0) { ?>
				<p><?php echo "Lunch Set A" ?> <span class="quantityPay"><?php echo $lsaqty; }?></span><span class="price"><?php echo "RM", $lsatotal; }?></span></p>
				<hr>
				<?php if ($lsbqty > 0) { ?>
				<p><?php echo "Lunch Set B" ?> <span class="quantityPay"><?php echo $lsbqty; }?></span><span class="price"><?php echo "RM", $lsbtotal; }?></span></p>
				<hr>
				<?php if ($lscqty > 0) { ?>
				<p><?php echo "Lunch Set C" ?> <span class="quantityPay"><?php echo $lscqty; }?></span><span class="price"><?php echo "RM", $lsctotal; }?></span></p>
				<hr>
				<?php if ($dsaqty > 0) { ?>
				<p><?php echo "Dinner Set" ?> <span class="quantityPay"><?php echo $dsaqty; }?></span><span class="price"><?php echo "RM", $dsatotal; }?></span></p>
				<hr>
				<?php if ($botdqty > 0) { ?>
				<p><?php echo "Beverage of the day" ?> <span class="quantityPay"><?php echo $botdqty; }?></span><span class="price"><?php echo "RM", $botdtotal; }?></span></p>
				<hr>
				<p>Total <span class="price" style="color:black"><b>RM<?php echo $total ?></b></span></p>
				</div>
			<?php ?>
			</div>
		</div>
		
		<?php include('footer.php');?>
		
	</body>
</html>
