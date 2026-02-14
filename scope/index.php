<?php


$test = "Test";

function test() {
	//Will only consider the variables defined within the scope of this function!


	$localVariable = "Ryan";

	//Can now access the var $test
	global $test;

	echo $test;

	return $localVariable;
}

//Undefined!
echo $localVariable;


function anotherTest() {
	$staticVar = 0;

	$staticVar++;

	return $staticVar;
}

echo anotherTest(); //1
echo anotherTest(); //1
echo PHP_EOL;

function staticTest() {
	static $staticVar = 0;
	$staticVar++;

	return $staticVar;
}

echo staticTest(); //1
echo staticTest(); //2
echo staticTest(); //3
echo PHP_EOL;

class MyClass {
	public $classVar = "Ryan";

	public function myMethod() {
		echo $this->classVar;
	}
}

$x = new MyClass();
echo $x->classVar; //Ryan
