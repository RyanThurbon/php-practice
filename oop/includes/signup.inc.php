<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	die();
}

$username = $_POST["username"];
$password = $_POST["password"];

require_once "../Classes/Dbh.php";
require_once "../Classes/Signup.php";

$signup = new Signup($username, $password);
$signup->registerUser();
