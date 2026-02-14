<?php

//for loop
for ($i = 1; $i <= 10; $i++) {
	echo "Iteration: $i <br/>";
}

//while loop
$counter = 1;
while ($counter <= 10) {
	echo "Counter is currently $counter <br/>";
	$counter++;
}

//do while loop
//will always run the code first, then evaluate the condition.
//in short: will always run at least once!
do {
	echo "Counter is currently $counter <br/>";
} while ($counter <= 1);


//foreach loop
$fruits = ["apple", "banana", "mango"];
$fruitsWithColor = [
	"apple" => "red",
	"banana" => "yellow",
	"orange" => "orange",
];

foreach($fruits as $fruit) {
	echo "Fruit is $fruit <br/>";
}

foreach ($fruitsWithColor as $fruit=>$color) {
	echo "The fruit $fruit is $color in color <br/>";
}
