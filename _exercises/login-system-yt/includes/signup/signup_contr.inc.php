<?php

declare(strict_types=1);

function is_input_empty(string $username, string $password, string $email): bool
{
	if (empty($username) || empty($password) || empty($email)) {
		return true;
	}

	return false;
}

function is_email_invalid(string $email): bool
{
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}

	return false;
}

function is_username_taken(PDO $pdo, string $username): bool
{
	if (get_username($pdo, $username)) {
		return true;
	}

	return false;
}

function is_email_registered(PDO $pdo, string $email): bool
{
	if (get_email($pdo, $email)) {
		return true;
	}

	return false;
}

function set_user(PDO $pdo, string $username, string $password, string $email): bool
{
	if (create_user($pdo, $username, $password, $email)) {
		return true;
	}

	return false;
}
