<?php

class Car
{
	private string $brand;
	private string $color;

	public function __construct($brand, $color = "none")
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

	//getters and setters

	public function getBrand()
	{
		return $this->brand;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function setBrand(string $brand)
	{
		$this->brand = $brand;
	}

	public function setColor(string $color)
	{
		$this->color = $color;
	}
}
