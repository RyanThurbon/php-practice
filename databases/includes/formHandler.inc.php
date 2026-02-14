<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	header("Location: ../index.php");
	exit();
}

//dont need to sanitize inputs because we are not outputting any of it to the browser.

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

try {
	require_once "dbh.inc.php";

	$query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

	$options = [
		"cost" => 12
	];

	$hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

	$stmt = $pdo->prepare($query);
	$stmt->bindParam(":username", $username);
	$stmt->bindParam(":pwd", $hashedPassword);
	$stmt->bindParam(":email", $email);
	$stmt->execute();

	header("Location: ../insert.php");

	die();
} catch (PDOException $error) {
	die("Query failed: " . $error->getMessage());
}
