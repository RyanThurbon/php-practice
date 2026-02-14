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

			<form class="flex flex-col gap-y-2" method="post" action="includes/formHandler.inc.php">
				<h2 class="font-bold text-center">Create account</h2>
				<input type="text" name="username" placeholder="username" class="border rounded-md py-1 px-2" required />
				<input type="email" name="email" placeholder="email" class="border rounded-md py-1 px-2" required />
				<input type="password" name="password" placeholder="password" class="border rounded-md py-1 px-2" required />
				<button type="submit" class="border p-2 rounded-md bg-black text-white">Create account</button>
			</form>

			<form class="flex flex-col gap-y-2">
				<h2 class="font-bold text-center">Login to account</h2>
				<input type="email" name="email" placeholder="email" class="border rounded-md py-1 px-2" required />
				<input type="password" name="password" placeholder="password" class="border rounded-md py-1 px-2" required />
				<button type="submit" class="border p-2 rounded-md bg-black text-white">Login to account</button>
			</form>

		</div>
	</div>
</body>

</html>
