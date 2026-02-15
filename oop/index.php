<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	require_once "Classes/Car.php";

	$car_1 = new Car("BMW", "blue");
	$carInfo = $car_1->getInfo();
	echo $carInfo['brand'];

	$car_1->setBrand("Volvo");
	echo $car_1->getBrand();
	echo $car_1->getColor();

	$car_1->setColor("purple");
	echo $car_1->getColor();
	?>
</body>

</html>
