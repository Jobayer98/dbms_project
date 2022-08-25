<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<style>
		body{
			background: linear-gradient(to right, #1a2980, #26d0ce);
		}
	</style>
</head>
<body>
<?php
	echo "<div class='home ui container'><a href=main.php>Home</a></div>\n\n";
	echo "<div class='ui container'><h3>Products Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM products" )
		or die("Can not execute query");
	echo "<table class='ui selectable inverted celled table'> \n";
	echo "<th>ID</th> <th> Name</th> <th>Price</th><th>Type</th> <th>Delete</th><th>Update</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $product_ID</td>";
		echo "<td> $product_Name </td>";
		echo "<td> $product_Price </td>";
		echo "<td> $product_Desc </td>";
		echo "<td><a href = 'products_delete.php?id=$product_ID'> Delete </a> </td>";
		echo "<td> <a href = 'proUpdate_input.php?id=$product_ID&name=$product_Name&price=$product_Price&type=$product_Desc'>Update</a></td><tr>\n";
	}



	$adv1 = mysqli_query( $connect, "SELECT Max(product_Price) as MaximumPrice FROM products" )

		or die("Can not execute query");

	echo "<table class='ui selectable inverted celled table'> \n";
	echo "<th>Maximum Price</th>\n";
	while( $rows = mysqli_fetch_array( $adv1 ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $MaximumPrice </td>";
	}
	echo "</table>\n\n";



	$adv3 = mysqli_query( $connect, "SELECT Count(product_ID) as TotalProduct FROM products" )

		or die("Can not execute query");

	echo "<table class='ui selectable inverted celled table'> \n";
	echo "<th>Total Product</th>\n";
	while( $rows = mysqli_fetch_array( $adv3 ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $TotalProduct </td>";
	}
	echo "</table>\n\n";


	echo "<button class='ui secondary button'><a href=products_input.php>Create a new record</a></button></div>";

?>

</body>
</html>