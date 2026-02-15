<?php

class DBH
{
	private $host = "localhost";
	private $dbName = "php_practice";
	private $dbUsername = "root";
	private $dbPassword = "";

	protected function connect()
	{
		$dsn = "mysql:host={$this->host};dbname={$this->dbName}";
		try {
			$pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $exception) {
			die("PDO connection failed: " . $exception->getMessage());
		}
	}
}
