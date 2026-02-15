<?php
require_once "includes/session_config.inc.php";
require_once "includes/login/login_view.inc.php";
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
			<div class="flex flex-col gap-y-1">
				<form action="includes/login/login.inc.php" method="post" class="flex flex-col gap-y-4 border rounded-lg p-4">
					<h2 class="text-center text-lg font-medium">Login to account</h2>
					<div class="flex flex-col gap-y-2">
						<input type="text" name="username" placeholder="Username" class="border p-2 rounded-md" />
						<input type="password" name="password" placeholder="Password" class="border p-2 rounded-md" />
						<button type="submit" class="p-2 bg-blue-400 text-white border rounded-md">Login</button>
					</div>
				</form>

				<?php
				check_login_errors();
				?>
			</div>
		</div>
	</div>
</body>

</html>
