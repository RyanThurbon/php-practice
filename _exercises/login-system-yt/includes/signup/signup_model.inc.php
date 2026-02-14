<?php

declare(strict_types=1);

function get_username(PDO $pdo, string $username): mixed
{
	$query = "SELECT username FROM users WHERE username = :username;";

	$statement = $pdo->prepare($query);
	$statement->bindParam(":username", $username);
	$statement->execute();

	return $statement->fetch(PDO::FETCH_ASSOC);
}

function get_email(PDO $pdo, string $email): mixed
{
	$query = "SELECT email FROM users WHERE email = :email;";

	$statement = $pdo->prepare($query);
	$statement->bindParam(":email", $email);
	$statement->execute();

	return $statement->fetch(PDO::FETCH_ASSOC);
}


function create_user(PDO $pdo, string $username, string $password, string $email): mixed
{
	$query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

	$options = [
		"cost" => 12,
	];

	$hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

	$statement = $pdo->prepare($query);
	$statement->bindParam(":username", $username);
	$statement->bindParam(":pwd", $hashedPassword);
	$statement->bindParam(":email", $email);
	$statement->execute();

	return $statement->fetch(PDO::FETCH_ASSOC);
}
