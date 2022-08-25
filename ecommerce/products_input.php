<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Input</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="return">
		<a href="products_read.php">Back</a>
	</div>
	<div class="contain">
	<form class='ui form' method=get action=products_result.php>
	<h3>Product Information:</h3>
		<div class="field">
			<label>Product Name</label>
			<div class="eight wide field">
				<div class="field">
					<input type="text" name="name" placeholder="Product Name">
				</div>
				<label>Price</label>
				<div>
					<input type="text" name="price" placeholder="Price">
				</div>
			</div>
			<label>Type</label>
			<div class="eight wide field">
				<input type="text" name="type" placeholder="Type">
			</div>
		</div>
		<br>
		<input class="ui secondary button" type=submit value="Add Product">
	</form>
	</div>
</body>
</html>