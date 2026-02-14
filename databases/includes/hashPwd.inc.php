<?php

$password = "testPassword";
$options = [
	"cost" => 12
];

$hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

$passwordLogin = "testPassword";

if (password_verify($passwordLogin, $hashedPassword)) {
	echo "Passwords are the same";
} else {
	echo "Passwords are NOT the same";
}



// $sensitiveData = "Ryan";

// $salt = bin2hex(random_bytes(16)); //generate random salt
// $pepper = "A_SECRET_PEPPER_STRING";

// $dataToHash = $sensitiveData . $salt . $pepper;

// $hash = hash("sha256", $dataToHash);

// // ----------- //

// $sensitiveData = "Ryan";

// $storedSalt = $salt;
// $storedHash = $hash;
// $pepper = "A_SECRET_PEPPER_STRING";

// $dataToHash = $sensitiveData . $salt . $pepper;

// $verificationHash = hash("sha256", $dataToHash);

// if ($verificationHash === $storedHash) {
// 	echo "The data is the same!";
// } else {
// 	echo "The data is NOT the same!";
// }
