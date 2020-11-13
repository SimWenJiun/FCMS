<?php
	session_start();
	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	
?>

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
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="css/style_menu.css" rel="stylesheet" type="text/css"/>
		<script src="script/script.js"></script>
		<title>FoodeEdge Gourmet - Menu</title>
		<link rel="icon" href="img/Icon.png">
</head>

<body class="fix-header">
<!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="operation_dashboard.php">Dashboard</a></li>
								<li><a href="logout.php">Logout</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-label">Log</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="allusers.php">All Users</a></li>
								<li><a href="add_users.php">Add Users</a></li>
								
                               
                            </ul>
                        </li>
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menues</a></li>
								<li><a href="add_menu.php">Add Menu</a></li>
                              
                                
                            </ul>
                        </li>
						 <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="vieworder.php">All Orders</a></li>
								  
                            </ul>
                        </li>
                         
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
				<!--div id="vieworderbody"-->
                <div class="row">
                    <div class="col-12">
					<div class="card">
                    <div class="card-body">
						<h1>Process Order</h1>
						<hr><br>
						<table id="oporderprocess">
							<?php
								$query = "SELECT * FROM Orders WHERE orderid='".$_GET['order_id']."'";
								$result = mysqli_query($conn, $query);
								$row = mysqli_fetch_array($result);
								$id = $row['orderid'];
							?>
							<tr>
								<th>Order ID</th>
								<td><?php echo $row['orderid']; ?></td>
							</tr>
							<tr>
								<th>Customer Email</th>
								<td><?php echo $row['customeremail']; ?></td>
							</tr>
							<tr>
								<th>Items</th>
								<td>
								<?php
									echo "<ul>";
									echo "<li>".$row['item1name']." x ".$row['item1quantity']."</li>";
									echo "<li>".$row['item2name']." x ".$row['item2quantity']."</li>";
									echo "<li>".$row['item3name']." x ".$row['item3quantity']."</li>";
									echo "<li>".$row['item4name']." x ".$row['item4quantity']."</li>";
									echo "<li>".$row['item5name']." x ".$row['item5quantity']."</li>";
									echo "<li>".$row['item6name']." x ".$row['item6quantity']."</li>";
									echo "</ul>";
								?>
								</td>
							</tr>
							<tr>
								<th>Price</th>
								<td>RM <?php echo $row['totalcost']; ?></td>
							</tr>
							<tr>
								<th>Delivery Date</th>
								<td><?php echo $row['deliverydate']; ?></td>
							</tr>
							<tr>
								<th>Delivery Address</th>
								<td><?php echo $row['deliveryaddress']; ?></td>
							</tr>
							<tr>
								<th>Payment Status</th>
								<td><?php echo $row['paymentstatus']; ?></td>
							</tr>
							<tr>
								<th>Order Status</th>
								<td>
									<form action="processingorder.php" method="post">
									<div id="statuslist">
									<?php
										$ostatus = $row['orderstatus'];
										if ($ostatus == 'pending')
										{
											echo '<select name="status" required="required">';
											echo '<option value="pending" selected>pending</option>';
											echo '<option value="confirmed">confirmed</option>';
											echo '<option value="delivered">delivered</option>';
											echo '<option value="cancelled">cancelled</option>';
											echo '</select>';
										}
										else if ($ostatus == 'confirmed')
										{
											echo '<select name="status" required="required">';
											echo '<option value="pending">pending</option>';
											echo '<option value="confirmed" selected>confirmed</option>';
											echo '<option value="delivered">delivered</option>';
											echo '<option value="cancelled">cancelled</option>';
											echo '</select>';								
										}
										else if ($ostatus == 'delivered')
										{
											echo '<select name="status" required="required">';
											echo '<option value="pending">pending</option>';
											echo '<option value="confirmed">confirmed</option>';
											echo '<option value="delivered" selected>delivered</option>';
											echo '<option value="cancelled">cancelled</option>';
											echo '</select>';								
										}
										else if ($ostatus == 'cancelled')
										{
											echo '<select name="status" required="required">';
											echo '<option value="pending">pending</option>';
											echo '<option value="confirmed">confirmed</option>';
											echo '<option value="delivered">delivered</option>';
											echo '<option value="cancelled" selected>cancelled</option>';
											echo '</select>';							
										}
										else
										{
											echo '<select name="status" required="required">';
											echo '<option value="" selected></option>';
											echo '<option value="pending">pending</option>';
											echo '<option value="confirmed">confirmed</option>';
											echo '<option value="delivered">delivered</option>';
											echo '<option value="cancelled">cancelled</option>';
											echo '</select>';							
										}
									?>
									<input type="submit" name="update" value="Update">
									</div>
									<input type="hidden" name="orderid" value="<?php echo $id;?>">
									</form>
								</td>
							</tr>
						</table>
					</div>
					</div>
					</div>
				</div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="script/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="script/lib/bootstrap/js/popper.min.js"></script>
    <script src="script/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="script/jquery.slimscroll.js"></script> 
    <!--stickey kit -->
    <script src="script/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
	<!--Menu sidebar -->
    <script src="script/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
	<script src="script/scripts.js"></script>
	
</body>

</html>


