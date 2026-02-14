<?php

$bool = true;
$a = 1;
$b = 4;

if ($a < $b && !$bool) {
	echo "First condition is true";
} else if ($a < $b && $bool) {
	echo "Second condition is true";
}

switch ($a) {
	case 1: {
		echo "The first case is true";
		break;
	}
	case 4: {
		echo "The second case is true";
		break;
	}
	default: {
		echo "None of the cases are true";
		break;
	}
}

$result = match($a) {
	1 => "The first match is true",
	4 => "The second match is true",
	2, 3, 5 => "The third match is true. The variable is either 2, 3 or 5",
	default => "None of the matches are true",
};
