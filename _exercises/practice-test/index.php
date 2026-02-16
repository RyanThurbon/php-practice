<?php

/**
 *
 * Write a PHP function named isEvenProduct that:
 * Accepts two integers
 * Returns true if their product is even
 * Returns false otherwise
 *
 */
function isEvenProduct(int $x, int $y)
{
	return ($x * $y) % 2 === 0;
}

/**
 *
 * Write a script that:
 * Receives an array of integers
 * Returns a new array containing only the positive integers
 * Example input: [-2, 5, 0, 11, -3]
 * Output: [5, 11]
 * Include a small sample test showing your function works.
 *
 */
function positiveValues(array $nums)
{
	return array_values(array_filter($nums, fn($num) => $num > 0));
}

/**
 *
 * Write a function doubleValues(array $nums)
 * that takes an array of numbers and returns a new array with each number doubled.
 * Also, ignore non-numeric values.
 * Input: [1, 2, 'a', 4]
 * Output: [2, 4, 8]
 *
 */
function doubleValues(array $nums)
{
	$filtered = array_filter($nums, fn($num) => is_numeric($num));
	return array_map(fn($num) => $num * 2, $filtered);
}

/**
 *
 * Write a function countVowels(string $text) that returns the number of vowels in a string.
 *
 */
function countVowels(string $text)
{
	return preg_match_all('/[aeiouAEIOU]/', $text);
}

/**
 *
 * Create a Car class with:
 * Properties: $brand, $color (default 'white')
 * Method getInfo() that returns an array with brand and color
 * Method paint($newColor) to change the color
 *
 */
class Vehicle
{
	private $brand;
	private $color;

	public function __construct(string $brand, string $color = "white")
	{
		$this->brand = $brand;
		$this->color = $color;
	}

	public function getInfo()
	{
		return [
			"brand" => $this->brand,
			"color" => $this->color,
		];
	}

	public function paint(string $color)
	{
		$this->color = $color;
	}
}

/**
 *
 * Debugging / Error Fixing
 * Fix this code snippet:
 * $nums = [1, 2, 3];
 * $result = array_map(fn($n) => $n*2);
 * print_r($result);
 *
 */
function fixSnippet()
{
	$nums = [1, 2, 3];
	$result = array_map(fn($n) => $n * 2, $nums);
	print_r($result);
}

/**
 *
 * Optional - Database / PDO
 * Write a PDO query function to get a user by email safely.
 *
 */
function getUserByEmail(PDO $pdo, string $email): array|null
{
	try {
		$query = "SELECT * FROM users WHERE email = :email";

		$statement = $pdo->prepare($query);
		$statement->execute(["email" => $email]);

		return $statement->fetch(PDO::FETCH_ASSOC) ?: null;
	} catch (PDOException $exception) {
		die("PDO query failed: " . $exception->getMessage());
	}
}

/**
 * Write a function that returns the largest number in an array.
 */
function largestValue(array $nums)
{
	return max($nums);
}

class User
{
	private $name;
	private $email;

	public function __construct(string $name, string $email)
	{
		$this->name = $name;
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail(string $email)
	{
		$this->email = $email;
	}
}

/**
 * Write a function filterEven(array $nums) that returns a new array containing only even numbers.
 */
function filterEven(array $nums)
{
	return array_values(array_filter($nums, fn($num) => $num % 2 === 0));
}

/**
 * Write a function reverseString(string $text) that returns the reversed string.
 */
function reverseString(string $text)
{
	return strrev($text);
}

/**
 * Create a Product class with:
 * private $name
 * private $price
 * Constructor that sets name and price
 * Method getPriceWithTax($taxRate) → returns price + tax
 * Method setPrice($newPrice)
 */
class Product
{
	private $name;
	private $price;

	public function __construct(string $name, float $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getPriceWithTax(float $taxRate)
	{
		return $this->price * (1 + $taxRate);
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPrice(float $price)
	{
		$this->price = $price;
	}
}

/**
 * Write a function getUserById(PDO $pdo, int $id) that fetches a user safely from the users table.
 */
function getUserById(PDO $pdo, int $id)
{
	try {
		$query = "SELECT * FROM users WHERE id = :id;";

		$statement = $pdo->prepare($query);
		$statement->execute([
			"id" => $id
		]);

		return $statement->fetch(PDO::FETCH_ASSOC) ?: null;
	} catch (PDOException $exception) {
		die("PDO query failed: " . $exception->getMessage());
	}
}

/**
 * Write a function fibonacci(int $n) that returns an array of the first n Fibonacci numbers.
 */
function fibonacci(int $n)
{
	$prev = 0;
	$current = 1;
	$nums = [];

	while ($current <= $n) {
		$nums[] = $current;
		$next = $prev + $current;
		$prev = $current;
		$current = $next;
	}

	return $nums;
}

/**
 * Write a function that checks if a string is a palindrome.
 */
function isPalindrome(string $text)
{
	// normalize
	$text = strtolower($text);
	$text = str_replace(" ", "", $text);

	$reversed = "";

	for ($i = strlen($text) - 1; $i >= 0; $i--) {
		$reversed .= $text[$i];
	}

	return $reversed === $text;
}


/**
 * Given an array of numbers, return the average value.
 */
function averageValue(array $nums)
{
	if (empty($nums)) {
		return 0;
	}

	$length = count($nums);
	$total = array_reduce($nums, fn($accum, $curr) => $accum += $curr, 0);

	return $total / $length;
}

/**
 * Count how many times a specific character appears in a string.
 */
function countCharacters(string $text, string $char)
{
	$counter = 0;

	for ($i = 0; $i < strlen($text); $i++) {
		if ($text[$i] === $char) {
			$counter++;
		}
	}

	return $counter;
}


/**
 * Create a User class with:
 * private $name
 * private $email
 * constructor
 * getter methods
 * Add a method isValidEmail() that checks if the email contains @.
 */
class User_
{
	private $name;
	private $email;

	public function __construct(string $name, string $email)
	{
		$this->name = $name;
		$this->email = $email;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function isValidEmail()
	{
		return preg_match('/[@]/', $this->getEmail());
	}
}

/**
 * Write a function that retrieves a user by email using PDO.
 */
function getUser(PDO $pdo, string $email)
{
	try {
		$query = "SELECT * FROM users WHERE email = :email;";

		$statement = $pdo->prepare($query);
		$statement->execute([
			"email" => $email
		]);

		return $statement->fetch(PDO::FETCH_ASSOC) ?: null;
	} catch (PDOException $exception) {
		die("PDO query failed: " . $exception->getMessage());
	}
}
