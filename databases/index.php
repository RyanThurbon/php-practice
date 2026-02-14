<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Authentication</title>
</head>

<body>
	<div class="flex min-h-screen">
		<div class="mx-auto flex py-40 flex flex-col gap-y-10">
			<form class="flex flex-col gap-y-2" method="post" action="search.php">
				<label for="search">Search for user</label>
				<input type="search" name="search" placeholder="search..." class="border rounded-md py-1 px-2" required />
				<button type="submit" class="border p-2 rounded-md bg-blue-400 text-white">Search</button>
			</form>
		</div>
	</div>
</body>

</html>
