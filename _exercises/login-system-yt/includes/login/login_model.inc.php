<?php

declare(strict_types=1);

function get_user(PDO $pdo, string $username)
{
	$query = "SELECT * FROM users WHERE username = :username;";

	$statement = $pdo->prepare($query);
	$statement->bindParam(":username", $username);
	$statement->execute();

	return $statement->fetch(PDO::FETCH_ASSOC);
}
