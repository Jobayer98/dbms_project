<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customers</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<style>
		body{
			background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
		}
	</style>
</head>
<body>
<?php
	echo "<div class='home ui container'><a href=main.php>Home</a></div>\n\n";
	echo "<div class='ui container'><h3>Customers Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM customers" )
		or die("Can not execute query");
	echo "<table class='ui orange celled table'> \n";
	echo "<th>ID</th><th> First Name</th> <th>Last Name</th> <th> Phone number</th> <th> Address</th> <th> Email</th> <th> City</th> <th>Delete</th><th>Update</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $customer_ID </td>";
		echo "<td> $First_Name </td>";
		echo "<td> $Last_Name </td>";
        echo "<td> $phone</td>";
		echo "<td> $address </td>";
        echo "<td> $email </td>";
		echo "<td> $city </td>";
		echo "<td> <a href = 'customers_delete.php?id=$customer_ID'> Delete </a> </td>";
		echo "<td> <a href = 'cusUpdate_input.php?id=$customer_ID&fname=$First_Name& lname=$Last_Name& phone=$phone& add=$address& email=$email& city=$city'>Update</a></td><tr>\n";
	}
	echo "</table> \n";
	

	$adv = mysqli_query( $connect, "SELECT First_Name, Last_Name, phone FROM customers c JOIN orderdetails o ON c.customer_ID = o.customer_ID" )

		or die("Can not execute query");

	echo "<table class='ui orange celled table'> \n";

	echo "<th> First Name</th> <th>Last Name</th> <th> Phone number</th>\n";
	while( $rows = mysqli_fetch_array( $adv ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $First_Name </td>";
		echo "<td> $Last_Name </td>";
        echo "<td> $phone</td>";
	}
	echo "</table> \n";

	echo "<button class='ui orange button'><a href=customers_input.php>Create a new record</a></button></div>";
?>

</body>
</html>