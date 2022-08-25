<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delivery</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="return">
		<a href="deliveries_read.php">Back</a>
	</div>
	<div class="contain">
	<form class='ui form' method=get action=deliveries_result.php>
	<h3>Delivery Information:</h3>
		<div class="field">
			<label>Shipper Name</label>
			<div class="eight wide field">
				<div class="field">
					<input type="text" name="name" placeholder="Shipper Name">
				</div>
				<label>Date</label>
				<div>
					<input type="Date" name="date">
				</div>
			</div>
		</div>
		<br>
		<input class="ui green button" type=submit value="Add Delivery">
	</form>
	</div>
</body>
</html>