<?php
session_start();

if (isset($_SESSION['username'])) {
	header("Location: dashboard.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Login</title>
</head>

<body>
	<div class="flex min-h-screen">
		<div class="flex mx-auto items-center">
			<form class="flex flex-col gap-y-4 border rounded-lg p-4" method="post" action="includes/userLogin.inc.php">
				<h2 class="text-center text-lg font-medium">Login to account</h2>
				<div class="flex flex-col gap-y-2">
					<input name="username" type="text" placeholder="Username" class="border rounded-md p-2" required />
					<input name="password" type="password" placeholder="Password" class="border rounded-md p-2" required />
					<button type="submit" class="p-2 bg-blue-400 text-white border rounded-md">Login</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>
