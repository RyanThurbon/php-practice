<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<main>
		<form action="formHandler.php" method="post">
			<label for="first_name">First Name</label>
			<input id="first_name" type="text" name="first_name" placeholder="First Name" />

			<label for="last_name">Last Name</label>
			<input id="last_name" type="text" name="last_name" placeholder="Last Name" />

			<label for="favourite_pet">Favourite Pet</label>
			<select id="favourite_pet" name="favourite_pet">
				<option value="none">None</option>
				<option value="dog">Dog</option>
				<option value="cat">Cat</option>
				<option value="bird">Bird</option>
			</select>

			<button type="submit">Submit</button>

		</form>
	</main>
</body>

</html>
