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

	$query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 5;";

	$stmt = $pdo->prepare($query);
	$stmt->bindParam(":username", $username);
	$stmt->bindParam(":pwd", $password);
	$stmt->bindParam(":email", $email);
	$stmt->execute();

	header("Location: ../updateDelete.php");

	die();
} catch (PDOException $error) {
	die("Query failed: " . $error->getMessage());
}
