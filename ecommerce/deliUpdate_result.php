<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Result</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$date = $_GET["date"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE deliveries SET nam='$name', dat='$date' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<div class='ui container'></div><p>Record updated:<br> Name = $name <br> Date = $date<br><br>";

	echo "<button class='ui green button'><a href=categories_read.php>READ all records</a></button></div>";

	?>
</body>
</html>


