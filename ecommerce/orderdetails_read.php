<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Orderdetails</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>



<body>
	
<?php
	echo "<h3>Order Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM orderdetails" )
		or die("Can not execute query");
		echo "<table class='ui black table'>\n";
	echo "<th>OrderID</th><th> Customer_ID</th> <th>ProductID</th><th>ProductName</th><th> Order_Date</th> <th>Price</th><th>Quantity</th>  <th>Delete</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $Order_ID </td>";
		echo "<td> $customer_ID </td>";
		echo "<td> $ProductID </td>";
		echo "<td> $ProductName </td>";
		echo "<td> $Order_Date </td>";
		echo "<td> $Price </td>";
        echo "<td> $Quantity</td>";
		echo "<td> <a href = 'orderdetails_delete.php?id=$Order_ID'> Delete </a> </td>\n";
	}
	$re = mysqli_query( $connect, "SELECT SUM(Price) as TotalPrice FROM orderdetails" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>Total Price</th>\n";
	while( $rows = mysqli_fetch_array( $re ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $TotalPrice </td>";
	}
	echo "</table> \n";
	echo "</table> \n";
	echo "<br><button class='ui primary button'><a href=orderdetails_input.php>Create a new record</a></button></div>";
?>
</body>
</html>