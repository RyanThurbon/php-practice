<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	header("Location: ../index.php");
	exit();
}

//dont need to sanitize inputs because we are not outputting any of it to the browser.

$email = $_POST["email"];
$password = $_POST["password"];

try {
	require_once "dbh.inc.php";

	$query = "DELETE FROM users WHERE email = :email AND pwd = :pwd;";

	$stmt = $pdo->prepare($query);
	$stmt->bindParam(":email", $email);
	$stmt->bindParam(":pwd", $password);
	$stmt->execute();

	header("Location: ../updateDelete.php");

	die();
} catch (PDOException $error) {
	die("Query failed: " . $error->getMessage());
}
