<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Category Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$type = $_GET["type"];

	?>

	<div class="return">
	<a href="categories_read.php">Back</a>
	</div>

	<div class="contain">

	<form class='ui form' method=get action=cateUpdate_resutl.php>

	<h3> Update Record</h3>

		<input type=hidden name=id value='<?php echo $id; ?>'>

		<div class="field">

			<label>Name</label>

			<div class="eight wide field">

				<div class="field">
					<input type="text" name="name" placeholder="Name" value='<?php echo $name; ?>'>
				</div>

				<label>Type</label>

				<div>
					<input type="text" name="type" placeholder="Type" value='<?php echo $type; ?>'>
				</div>

			</div>

		</div>
		<br>
		<input class="ui teal button" type=submit value="Update Category">
	</form>

	</div>
</body>
</html>