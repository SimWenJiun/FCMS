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
                                <li><a href="alloperationusers.php">All Users</a></li>
								
                               
                            </ul>
                        </li>
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menus</a></li>
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
					<h1>Clients' Orders</h1>
					<p>Table showing clients' orders that are either "<span class="redtext">pending</span>" or "<span class="greentext">confirmed</span>".</p>
					<table id="oporderhistory">
						<tr>
							<th>Order ID</th>
							<th>Customer</th>
							<th>Price Paid</th>
							<th>Date</th>
							<th>Order Status</th>
							<th>Action</th>
						</tr>

						<?php
							$query = "SELECT * FROM Orders";
							$result = mysqli_query($conn, $query);
							$rownum = mysqli_num_rows($result);
							
							if(!$rownum != 0)
							{
								echo "<td colspan='6'><center>No Order data found!</center></td>";
							}
							else
							{	
								while ($row = mysqli_fetch_array($result))
								{
									if($row['orderstatus'] == 'confirmed' || $row['orderstatus'] == 'pending')
									{
										echo "<tr>";
										echo "<td>".$row['orderid']."</td>";
										echo "<td>".$row['customeremail']."</td>";
										echo "<td>RM ".$row['totalcost']."</td>";
										echo "<td>".$row['deliverydate']."</td>";
										if($row['orderstatus'] == 'confirmed')
										{
											echo "<td style='color:green;'>".$row['orderstatus']."</td>";
										}
										else
										{
											echo "<td style='color:red;'>".$row['orderstatus']."</td>";
										}
										echo '<td><a href="processorder.php?order_id='.$row['orderid'].'" id="vieworder">view</a></td>';
										echo "</tr>";
									}
								}
							}
						?>
					</table>
					</div>
					</div>
					</div>
					<br>
					<br>
					<div class="col-12">
					<div class="card">
                    <div class="card-body">
					<p>Table showing clients' orders that are either "<span class="greentext">delivered</span>" or "<span class="redtext">cancelled</span>".</p>
					<table id="oporderhistory">
						<tr>
							<th>Order ID</th>
							<th>Customer</th>
							<th>Price Paid</th>
							<th>Date</th>
							<th>Order Status</th>
							<th>Action</th>
						</tr>

						<?php
							$query = "SELECT * FROM Orders";
							$result = mysqli_query($conn, $query);
							$rownum = mysqli_num_rows($result);
							
							if(!$rownum != 0)
							{
								echo "<td colspan='6'><center>No Order data found!</center></td>";
							}
							else
							{	
								while ($row = mysqli_fetch_array($result))
								{
									if($row['orderstatus'] == 'delivered' || $row['orderstatus'] == 'cancelled')
									{
										echo "<tr>";
										echo "<td>".$row['orderid']."</td>";
										echo "<td>".$row['customeremail']."</td>";
										echo "<td>RM ".$row['totalcost']."</td>";
										echo "<td>".$row['deliverydate']."</td>";
										if($row['orderstatus'] == 'delivered')
										{
											echo "<td style='color:green;'>".$row['orderstatus']."</td>";
										}
										else
										{
											echo "<td style='color:red;'>".$row['orderstatus']."</td>";
										}
										echo '<td><a href="processorder.php?order_id='.$row['orderid'].'" id="vieworder">view</a></td>';
										echo "</tr>";
									}
								}
							}
						?>
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