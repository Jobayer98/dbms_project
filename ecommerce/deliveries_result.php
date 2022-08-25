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
	$name = $_GET["name"];
	$date = $_GET["date"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO deliveries VALUES ( null, null, '$name','$date')" )
		or die("Can not execute query");

	echo "<div class='ui container'>Record inserted:<br> Name = $name<br><br>";

	echo "<button class='ui green button'><a href=deliveries_read.php>Read all record</a></button></div>";
?>

</body>
</html>