<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Result</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$price = $_GET["price"];

	$type = $_GET["type"];


	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE products SET product_Name='$name', product_Price='$price',product_Desc='$type' WHERE product_ID = $id";


	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<div class='ui container'><p>Record updated:<br> Product Name = $name <br> price = $price <br>";

	echo "<button class='ui secondary button'><a href=products_read.php>Read all records</a></button></div>";

	?>
</body>
</html>