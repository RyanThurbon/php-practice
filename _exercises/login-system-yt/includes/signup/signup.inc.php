<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	header("Location: ../index.php");
	die();
}

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

try {
	require_once "../dbh.inc.php";
	require_once "signup_model.inc.php";
	require_once "signup_contr.inc.php";

	//ERROR HANDLERS
	$errors = [];

	if (is_input_empty($username, $password, $email)) {
		$errors["empty_input"] = "Form inputs cannot be empty!";
	}

	if (is_email_invalid($email)) {
		$errors["invalid_email"] = "Email is invalid!";
	}

	if (is_username_taken($pdo, $username)) {
		$errors["username_taken"] = "Username has already been taken!";
	}

	if (is_email_registered($pdo, $email)) {
		$errors["email_registered"] = "Email is already registered!";
	}

	require_once "../session_config.inc.php";

	if ($errors) {
		$_SESSION["signup_errors"] = $errors;

		$signupData = [
			"username" => $username,
			"email" => $email,
		];

		$_SESSION["signup_data"] = $signupData;

		header("Location: ../../index.php");
		die();
	}

	set_user($pdo, $username, $password, $email);
	header("Location: ../../index.php?signup=success");

	$pdo = null;
	$statement = null;
	die();
} catch (PDOException $exception) {
	die("PDO query failed: " . $exception->getMessage());
}
