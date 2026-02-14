<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	header("Location: ../index.php");
	exit();
}

session_start();

//should error handle, just lazy now

$username = $_SESSION['username'];

try {
	require_once "databaseHandler.inc.php";

	$query = "DELETE FROM users WHERE username = :username;";

	$statement = $pdo->prepare($query);
	$statement->bindParam(":username", $username);
	$statement->execute();

	session_unset();
	session_destroy();

	header("Location: ../index.php");
	exit();
} catch (PDOException $exception) {
	echo "PDO query failed: " . $exception->getMessage();
}
