<?php

declare(strict_types=1);

function display_username()
{
	if (isset($_SESSION["user_username"])) {
		echo "Logged in as " . $_SESSION["user_username"];
	} else {
		echo "You are not logged in.";
	}
}

function check_login_errors()
{
	if (isset($_SESSION["login_errors"])) {
		$errors = $_SESSION["login_errors"];

		foreach ($errors as $error) {
			echo "<p class='text-red-400'>" . $error . "</p>";
		}

		unset($_SESSION["login_errors"]);
	}

	if (isset($_GET["login"]) && $_GET["login"] === "success") {
		echo "<p class='text-emerald-400 text-center'>" . "Login successfull!" . "</p>";
	}
}
