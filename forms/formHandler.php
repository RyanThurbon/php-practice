<?php

//Make sure the page is actually accessed from the form
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	//Sanitize data -> prevent unwanted code injections!
	$firstName = htmlspecialchars($_POST['first_name']);
	$lastName = htmlspecialchars($_POST['last_name']);
	$favouritePet = htmlspecialchars($_POST['favourite_pet']);

	$error = "";
	if (empty($firstName)) {
		$error = "First name is empty!";
	} else if (empty($lastName)) {
		$error = "Last name is empty!";
	}

	if ($error) {
		echo $error;
	} else {
		echo "These are the submitted data values:";
		echo "<br/>";
		echo $firstName;
		echo "<br/>";
		echo $lastName;
		echo "<br/>";
		echo $favouritePet;
	}
} else {
	//The user accessed this page in a way that is not intended - redirect immediately!
	header("Location: ./index.php");
	exit();
}
