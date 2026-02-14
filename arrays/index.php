<?php
$fruits = ["Apple", "Banana", "Cherry"];

//push
$fruits[] = "Orange";

//also works
array_push($fruits, "Watermelon");

//delete starting at index 0, for a length of 2
array_splice($fruits, 0, 2);

//start at index 0, but delete nothing, and insert Mango at that index
//Mango is now first in the array
array_splice($fruits, 0, 0, "Mango");

$newFruits = ["Kiwi", "Strawberry", "Pear"];

//Can also add an entirely new array
array_splice($fruits, 0, 0, $newFruits);

print_r($fruits);


//Associative array (key => value)
$tasks = [
	"laundry" => "Ryan",
	"trash" => "Matthew",
	"vacuum" => "Luke",
	"dishes" => "Peter",
	"gardening" => "Linda"
];

//print array values
print_r($tasks);

//length of array
echo(count($tasks));

//sort asc
sort($tasks);

//sort desc
rsort($tasks);


$food = [
	"fruit" => ["Apple", "Cherry"],
	"meat" => ["Chicken", "Fish"],
	"vegetables" => ["Cucumber", "Carrot"]
];

echo $food['meat'][0]
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

</body>
</html>
