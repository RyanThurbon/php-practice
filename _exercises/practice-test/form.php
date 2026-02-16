<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="formhandler.php" method="post">
		<input type="text" name="name" placeholder="name" />
		<?php if (isset($_SESSION["errors"]["empty_name"])): ?>
			<p><?php echo $_SESSION["errors"]["empty_name"] ?></p>
			<?php unset($_SESSION["errors"]["empty_name"]) ?>
		<?php endif ?>
		<button type="submit">Submit</button>
	</form>
</body>

</html>
