<?php
session_start();

$_SESSION["username"] = "Ryan";

//pruge single session variable
unset($_SESSION['username']);

//purge all session data!
session_unset();

//purge effects take place once routing to another page!
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sessions</title>
</head>

<body>
	<?php
	echo $_SESSION["username"];
	?>
</body>

</html>
