<!DOCTYPE html>
<html lang="en">
<?php
include("connection.php");
error_reporting(0);
session_start();

?>
	<head>
		<meta name="DP2 - Group 3" content="FoodEdge Gourmet - Menu"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<script src="script/script.js"></script>
		<title>FoodeEdge Gourmet - Menu</title>
		<link rel="icon" href="img/Icon.png">
	</head>

	<body>
		<?php include('header.php');?>
		
		
		<div id="body" class="rowmenu">
			<div id="menubody">
			<?php
				$sql="SELECT * FROM Menu order by item_id desc";
				$query=mysqli_query($db,$sql);
				if(!mysqli_num_rows($query) > 0 )
				{
					echo '<h3><center>No Dish-Data!</center></h3>';
				}
				else
				{				
					while($rows=mysqli_fetch_array($query))
					{
						$mql="select * from Menu where item_id='".$rows['item_id']."'";
						$newquery=mysqli_query($db,$mql);
						$fetch=mysqli_fetch_array($newquery);
			  
			  
			  echo'
			  <div id="foodbutton">
				<img src="img/menu_item/'.$rows['item_pic'].'" style="width:100%" onclick="openModal();currentSlide(1)" id="foodbuttonimage" class="hover-shadow cursor"><a href="'.$rows['phpname'].'">
				<div id="foodbuttonbox">
					<div id="foodbuttontext">'.$fetch['menu_item'].'</div>
				</div>
				 
			  </div>';
					}
				}
			?>
			  
			</div>
		
		</div>
		
		<?php include('footer.php');?>
	</body>
</html>