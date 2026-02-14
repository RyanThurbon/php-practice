<?php

$dataSourceName = "mysql:host=localhost;dbname=php_practice_loginsystem";
$databaseUsername = "root";
$databasePassword = "";

try {
	$pdo = new PDO($dataSourceName, $databaseUsername, $databasePassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
	echo "PDO connection failed: " . $exception->getMessage();
}
