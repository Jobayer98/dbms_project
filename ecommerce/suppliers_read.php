<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customers</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>

<?php
	echo "<h3>Suppliers Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM suppliers" )
		or die("Can not execute query");
	echo "<table 'ui inverted grey table'> \n";
	echo "<th>SupplierID</th><th> Supplier_Name</th> <th>Address</th> <th> Phone</th> <th> product_ID</th> <th> Email</th><th>Delete</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $supplier_ID </td>";
		echo "<td> $Supplier_Name </td>";
		echo "<td> $Address </td>";
        echo "<td> $Phone </td>";
		echo "<td> $product_ID </td>";
        echo "<td> $Email </td>";
		echo "<td> <a href = 'suppliers_delete.php?id=$supplier_ID'> Delete </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<br><button class='ui violet button'><a href=suppliers_input.php>Create a new record</a></button></div>";
?>

</body>
</html>
