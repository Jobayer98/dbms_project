<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payment</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>



<?php
	echo "<h3>Payments Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM payment" )
		or die("Can not execute query");
	echo "<table class='ui inverted red table'> \n";
	echo "<th>Payment ID</th> <th>Customer ID</th><th>Amount</th><th>Payment Date</th><th>Delete</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $payment_ID </td>";
		echo "<td> $customer_ID </td>";
		echo "<td> $amount </td>";
		echo "<td> $payment_Date </td>";
		echo "<td> <a href = 'payment_delete.php?id=$payment_ID'> Delete </a> </td>\n";
	}

	$re = mysqli_query( $connect, "SELECT SUM(amount) as TotalPrice FROM payment" )
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
	echo "<button class='ui inverted red button'><a href=payment_input.php>Create a new record</a></button></div>";
?>

</body>
</html>
