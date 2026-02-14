<?php

$text = "Hello, World!";

$textLength = strlen($text);
$charPos = strpos($text, "H");

//Hello Ryan
str_replace("World", "Ryan", $text);

strtolower($text);
strtoupper($text);

//He
$subString = substr($text, 0, 2);

//[Hello, World]
$splitArray = explode(" ", $text);

$array = ["Apple", "Banana", "Mango"];

//true
is_array($array);

//Remove last element
array_pop($array);

//Reverse array
array_reverse($array);

$array2 = ["Watermelon"];

//Merge the two arrays into 1
$array3 = [...$array, $array2];
$array3 = array_merge($array, $array2);

$date = "2026-02-13 12:00:00";
echo strtotime($date);
