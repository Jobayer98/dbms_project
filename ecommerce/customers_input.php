<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customers Input</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="return">
		<a href="customers_read.php">Back</a>
	</div>
	<div class="contain">
	<form class='ui form' method=get action=customers_result.php>
	<h3>Customer Information:</h3>
		<div class="field">
			<label>First Name</label>
			<div class="eight wide field">
				<div class="field">
					<input type="text" name="fname" placeholder="First Name">
				</div>
				<label>Last Name</label>
				<div>
					<input type="text" name="lname" placeholder="Last Name">
				</div>
			</div>
			<label>Phone</label>
			<div class="eight wide field">
				<input type="text" name="phone" placeholder="Phone">
			</div>
			<label>Address</label>
			<div class="eight wide field">
				<input type="text" name="add" placeholder="Address">
			</div>
			<label>Email</label>
			<div class="eight wide field">
				<input type="email" name="email" placeholder="Email">
			</div>
			<label>City</label>
			<div class="eight wide field">
				<input type="text" name="city" placeholder="City">
			</div>
		</div>
		<br>
		<input class="ui orange button" type=submit value="Add Customer">
	</form>
	</div>
</body>
</html>
