<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Delete</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php

	$id = $_GET["id"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM products WHERE $id=product_ID" )

		or die("Can not execute query");


	echo "<div class='ui container'>Record deleted<br><br>";



	echo "<button class='ui secondary button'><a href=products_read.php>Read all records</a></button></div>";

	?>
</body>
</html>