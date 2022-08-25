<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customer Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php

		$id = $_GET["id"];

		$fname = $_GET["fname"];

		$lname = $_GET["lname"];

		$phone = $_GET["phone"];

		$add = $_GET["add"];

		$email = $_GET["email"];

		$city = $_GET["city"];
	?>
	<div class="return">
		<a href="customers_read.php">Back</a>
	</div>
	<div class="contain">
	<form class='ui form' method=get action=cusUpdate_result.php>
	<h3> Update Customer Information</h3>
		<input type=hidden name=id value='<?php echo $id; ?>'>
		<div class="field">
			<label>First Name</label>
			<div class="eight wide field">
				<div class="field">
					<input type="text" name="fname" placeholder="First Name" value='<?php echo $fname; ?>'>
				</div>
				<label>Last Name</label>
				<div>
					<input type="text" name="lname" placeholder="Last Name" value='<?php echo $lname; ?>'>
				</div>
			</div>
			<label>Phone</label>
			<div class="eight wide field">
				<input type="text" name="phone" placeholder="Phone" value='<?php echo $phone; ?>'>
			</div>
			<label>Address</label>
			<div class="eight wide field">
				<input type="text" name="add" placeholder="Address" value='<?php echo $add; ?>'>
			</div>
			<label>Email</label>
			<div class="eight wide field">
				<input type="email" name="email" placeholder="Email" value='<?php echo $email; ?>'>
			</div>
			<label>City</label>
			<div class="eight wide field">
				<input type="text" name="city" placeholder="City" value='<?php echo $city; ?>'>
			</div>
		</div>
		<br>
		<input class="ui primary button" type=submit value="Update Customer">
	</form>
	</div>
</body>
</html>