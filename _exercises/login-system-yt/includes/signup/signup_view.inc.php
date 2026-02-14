<?php

declare(strict_types=1);

function signup_inputs()
{
	if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["signup_errors"]["username_taken"])) {
		$username = $_SESSION["signup_data"]["username"];
		echo '<input name="username" type="text" placeholder="Username" class="border rounded-md p-2" value="' . $username . '"/>';
	} else {
		echo '<input name="username" type="text" placeholder="Username" class="border rounded-md p-2" />';
	}

	if (
		isset($_SESSION["signup_data"]["email"])
		&& !isset($_SESSION["signup_errors"]["email_registered"])
		&& !isset($_SESSION["signup_errors"]["invalid_email"])
	) {
		$email = $_SESSION["signup_data"]["email"];
		echo '<input name="email" type="text" placeholder="Email" class="border rounded-md p-2" value="' . $email . '"/>';
	} else {
		echo '<input name="email" type="text" placeholder="Email" class="border rounded-md p-2" />';
	}

	echo '<input name="password" type="password" placeholder="Password" class="border rounded-md p-2" />';
}

function check_signup_errors()
{
	if (isset($_SESSION["signup_errors"])) {
		$errors = $_SESSION["signup_errors"];

		foreach ($errors as $error) {
			echo "<p class='text-red-400'>" . $error . "</p>";
		}

		unset($_SESSION["signup_errors"]);
	}

	if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
		echo "<p class='text-emerald-400'>" . " Signup successfull!" . "</p>";
	}
}
