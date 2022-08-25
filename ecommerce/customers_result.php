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
	$fname = $_GET["fname"];
	$lname = $_GET["lname"];
    $phone = $_GET["phone"];
	$add = $_GET["add"];
    $email = $_GET["email"];
	$city = $_GET["city"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO customers VALUES ( null, '$fname', '$lname','$phone','$add','$email','$city')" )
		or die("Can not execute query");

	echo "<div class='ui container'>Record inserted:<br> First Name = $fname <br> Last Name = $lname <br>";

	echo "<button class='ui orange button'><a href=customers_read.php>Read all record</a></button></div>";
?>

</body>
</html>