<?php

$dsn = "mysql:host=localhost;dbname=php_practice_loginsystem";
$dbUsername = "root";
$dbPassword = "";

try {
	$pdo = new PDO($dsn, $dbUsername, $dbPassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
	die("PDO connection failed: " . $exception->getMessage());
}
