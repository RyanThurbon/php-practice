<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	header("Location: ../index.php");
	exit();
}

session_start();

$formUsername = $_POST["username"];
$formPassword = $_POST["password"];

//should error handle, just lazy now

try {
	require_once "databaseHandler.inc.php";

	$query = "SELECT * FROM users WHERE username = :username;";

	$statement = $pdo->prepare($query);
	$statement->bindParam(":username", $formUsername);
	$statement->execute();

	$user = $statement->fetch(PDO::FETCH_ASSOC);

	if (!$user) {
		die("User not found");
	}

	if (!password_verify($formPassword, $user['pwd'])) {
		die("Invalid credentials provided!");
	}

	$_SESSION['username'] = $user['username'];

	header("Location: ../dashboard.php");
	exit();
} catch (PDOException $exception) {
	echo "PDO query failed: " . $exception->getMessage();
}
