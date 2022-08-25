<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update Input</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
    <?php

    $id = $_GET["id"];

    $name = $_GET["name"];

    $price = $_GET["price"];

    $type = $_GET["type"];

    ?>

    <div class="return">
        <a href="products_read.php">Back</a>
    </div>
    <div class="contain">
	<form class='ui form' method=get action=proUpdate_result.php>
	<h3>Product Update:</h3>
		<input type=hidden name=id value='<?php echo $id; ?>'>
		<div class="field">
			<label>Product Name</label>
			<div class="eight wide field">
				<div class="field">
					<input type="text" name="name" placeholder="Product Name" value='<?php echo $name; ?>'>
				</div>
				<label>Price</label>
				<div>
					<input type="text" name="price" placeholder="Price" value='<?php echo $price; ?>'>
				</div>
			</div>
			<label>Type</label>
			<div class="eight wide field">
				<input type="text" name="type" placeholder="Type" value='<?php echo $type; ?>'>
			</div>
		</div>
		<br>
		<input class="ui secondary button" type=submit value="Update Product">
	</form>
	</div>
</body>
</html>