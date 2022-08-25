<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Deliverives</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<style>
		body{
			background: linear-gradient(to right, #373b44, #4286f4);
		}
	</style>
</head>
<body>
<?php
	echo "<div class='home ui container'><a href=main.php>Home</a></div>\n\n";
	echo "<div class='ui container'><h3>Deliveries Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM deliveries" )
		or die("Can not execute query");
	echo "<table class='ui celled table'> \n";
	echo "<th>Delivery ID</th><th> Shipper Name</th><th>Delivery Date</th><th>Delete</th><th>Update</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td class='positive'> $delivery_ID </td>";
		echo "<td class='negative'> $Shipper_Name </td>";
        echo "<td class='positive'> $delivery_Date </td>";
		echo "<td class='negative'> <a href = 'deliveries_delete.php?id=$delivery_ID'> Delete </a> </td>";
		echo "<td class='positive'> <a href = 'deliUpdate_input.php?id=$delivery_ID&name=$Shipper_Name&date=$delivery_Date'>Update</a></td><tr>\n";
		
	}
	echo "</table> \n";
	echo "<button class='ui positive button'><a href=deliveries_input.php>Create a new record</a></button></div>";
?>

</body>
</html>