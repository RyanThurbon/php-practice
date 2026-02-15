<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	header("Location: ../../login.php");
	die();
}

$username = $_POST["username"];
$password = $_POST["password"];

try {
	require_once "../dbh.inc.php";
	require_once "login_model.inc.php";
	require_once "login_contr.inc.php";

	//ERROR HANDLERS
	$errors = [];

	if (is_input_empty($username, $password)) {
		$errors["empty_input"] = "Form inputs cannot be empty!";
	}

	$user = get_user($pdo, $username);

	if (is_username_wrong($user)) {
		$errors["login_incorrect"] = "Invalid login credentials!";
	}

	if (!is_username_wrong($user) && is_password_wrong($password, $user['pwd'])) {
		$errors["login_incorrect"] = "Invalid login credentials!";
	}

	require_once "../session_config.inc.php";

	if ($errors) {
		$_SESSION["login_errors"] = $errors;
		header("Location: ../../login.php");
		die();
	}

	$_SESSION["user_id"] = $user["id"];
	$_SESSION["user_username"] = htmlspecialchars($user["username"]);
	$_SESSION["last_regeneration"] = time();

	header("Location: ../../login.php?login=success");
	$pdo = null;
	$statement = null;
	die();
} catch (PDOException $exception) {
	die("PDO query failed: " . $exception->getMessage());
}
