<?php

	$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12369317", "KGUuPpDYfu", "sql12369317");
	
	if(isset($_POST['update']))
	{
		$sql = "UPDATE Orders SET orderstatus='".$_POST['status']."' WHERE orderid='".$_POST['orderid']."'";
		
		$result = mysqli_query($conn, $sql);
		
		echo "<script type='text/javascript'>";
		echo "alert('Order status successfully updated!');";
		echo "window.location.href='vieworder.php';";
		echo "</script>";
	}
	else
	{
		echo "No order to process!";
	}

?>