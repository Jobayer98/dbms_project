<?php
	echo "<a href=main.php>Home</a>";
	echo "<h3>Order Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$re = mysqli_query( $connect, "SELECT SUM(Price) as TotalPrice FROM orderdetails" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>OrderID</th><th>ProductID</th><th>ProductName</th><th>Total Price</th>\n";
	while( $rows = mysqli_fetch_array( $re ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $TotalPrice </td>";
	}
	echo "</table> \n";
	echo "<p><a href=orderdetails_input.php>CREATE a new record</a>";
?>
