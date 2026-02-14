<?php

//data source name
$dsn = "mysql:host=localhost;dbname=php_practice";

$dbUsername = "root";
$dbPassword = "";

try {
	//php data object
	$pdo = new PDO($dsn, $dbUsername, $dbPassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
	echo "Connection failed: " . $error->getMessage();
}
