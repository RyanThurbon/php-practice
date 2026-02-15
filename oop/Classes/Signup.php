<?php

class Signup extends DBH
{
	private $username;
	private $password;

	public function __construct(string $username, string $password)
	{
		$this->username = $username;
		$this->password = $password;
	}

	private function insertUser()
	{
		$query = "INSERT INTO users (username, pwd) VALUES (:username, :pwd);";

		$pdo = $this->connect();

		$statement = $pdo->prepare($query);
		$statement->bindParam(":username", $this->username);
		$statement->bindParam(":pwd", $this->password);
		$statement->execute();
	}

	private function isEmptySubmit()
	{
		if (isset($this->username) && isset($this->password)) {
			return false;
		}

		return true;
	}

	public function registerUser()
	{
		//error handlers
		if ($this->isEmptySubmit()) {
			header("Location: ../index.php");
			die();
		}

		//if no errors -> signup user
		$this->insertUser();
	}
}
