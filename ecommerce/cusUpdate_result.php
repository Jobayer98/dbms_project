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

	$fname = $_GET["fname"];

	$lname = $_GET["lname"];

	$phone = $_GET["phone"];

	$add = $_GET["add"];

	$email = $_GET["email"];

	$city = $_GET["city"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE customers SET First_Name='$fname', Last_Name='$lname', phone='$phone', address='$add', email='$email', city='$city' WHERE customer_ID = $id";


	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<div class='ui container'><p>Record updated:<br> First Name = $fname <br> Last Name = $lname <br>";

	echo "<button class='ui primary button'><a href=customers_read.php>Read all records</a></button></div>";

	?>
</body>
</html>