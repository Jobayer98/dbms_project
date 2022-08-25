<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categories</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<style>
		body{
			background: linear-gradient(to right, #314755, #26a0da);
		}
	</style>
</head>
<body>
<?php
	echo "<div class='home ui container'><a href=main.php>Home</a></div><br>\n\n";
	echo "<div class='ui container'><h3>Category Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM categories" )
		or die("Can not execute query");
	echo "<table class='ui inverted teal table'>\n";
	echo "<th>ID</th><th> NAME</th> <th>Type</th> <th>Delete</th><th>Update</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $category_ID </td>";
		echo "<td> $category_Name </td>";
		echo "<td> $category_Type </td>";
		echo "<td> <a href = 'categories_delete.php?id=$category_ID'> Delete </a> </td>";
		echo "<td> <a href = 'cateUpdate_input.php?id=$category_ID&name=$category_Name&type=$category_Type'>Update</a></td><tr>\n";
	}
	echo "</table>\n";


	$adv = mysqli_query( $connect, "SELECT category_Name,category_Type FROM categories WHERE category_ID IN (SELECT category_ID FROM products)" )

		or die("Can not execute query");

	echo "<table class='ui inverted teal table'>\n";
	echo "<th> NAME</th> <th>Type</th>\n";
	while( $rows = mysqli_fetch_array( $adv ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $category_Name </td>";
		echo "<td> $category_Type </td>";
	}
	echo "</table>\n";

	echo "<button class='ui teal button'><a href=categories_input.php>Create a new record</a></button></div>";
?>

</body>
</html>