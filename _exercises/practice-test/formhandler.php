<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
	header("Location: form.php");
	die();
}

//<input type="text" name="name" placeholder="name" />
//if this is provided via input, it will render an html input.
//we need to sanitize the input with htmlspecialchars()
$name = htmlspecialchars($_POST['name']);

$errors = [];

if (empty($name)) {
	$errors['empty_name'] = "Name field is empty!";
}

if ($errors) {
	$_SESSION["errors"] = $errors;
	header("Location: form.php");
	die();
}

echo "Welcome " . $name;
