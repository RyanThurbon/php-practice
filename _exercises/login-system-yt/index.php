<?php
require_once "includes/session_config.inc.php";
require_once "includes/signup/signup_view.inc.php";

if (isset($_SESSION["user_username"])) {
	header("Location: logout.php");
	die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Register</title>
</head>

<body>
	<div class="flex min-h-screen">
		<div class="flex mx-auto items-center">
			<div class="flex flex-col gap-y-1">
				<form action="includes/signup/signup.inc.php" method="post" class="flex flex-col gap-y-4 border rounded-lg p-4">
					<h2 class="text-center text-lg font-medium">Register an account</h2>
					<div class="flex flex-col gap-y-2">
						<?php
						signup_inputs();
						?>
						<button type="submit" class="p-2 bg-blue-400 text-white border rounded-md">Register</button>
					</div>
				</form>

				<?php
				check_signup_errors();
				?>
			</div>
		</div>
	</div>
</body>

</html>
