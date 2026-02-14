<?php
session_start();

if (!isset($_SESSION['username'])) {
	header("Location: index.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Dashboard</title>
</head>

<body>
	<div class="flex min-h-screen">
		<div class="flex mx-auto items-center">
			<form class="flex flex-col gap-y-4 border rounded-lg p-4" method="post" action="includes/userDelete.inc.php">
				<h2 class="text-center text-lg font-medium">Welcome back, <?php echo $_SESSION['username'] ?>!</h2>
				<button class="p-2 bg-red-400 text-white border rounded-md">Delete account</button>
			</form>
		</div>
	</div>
</body>

</html>
