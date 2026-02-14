<?php

function sayHello(string $text = "World!")
{
	return "Hello $text";
}

function calculator(int $num_1, int $num_2)
{
	return $num_1 + $num_2;
}

echo calculator(2, 4);
