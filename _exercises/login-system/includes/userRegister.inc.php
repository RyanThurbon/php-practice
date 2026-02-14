<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	header("Location: ../index.php");
	exit();
}

session_start();

$formUsername = $_POST["username"];
$formPassword = $_POST["password"];
$formEmail = $_POST["email"];

//should error handle, just lazy now

try {
	require_once "databaseHandler.inc.php";

	$query = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd);";

	$statement = $pdo->prepare($query);

	$hashOptions = [
		"cost" => 12,
	];

	$hashedPassword = password_hash($formPassword, PASSWORD_BCRYPT, $hashOptions);

	$statement->bindParam(":username", $formUsername);
	$statement->bindParam(":email", $formEmail);
	$statement->bindParam(":pwd", $hashedPassword);
	$statement->execute();

	//i assume we do this
	$_SESSION['username'] = $formUsername;

	header("Location: ../dashboard.php");
	die();
} catch (PDOException $exception) {
	echo "PDO query failed: " . $exception->getMessage();
}
