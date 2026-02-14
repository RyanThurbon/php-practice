<?php

define("NAME", "Ryan");

//Ryan
echo NAME;

const FIRST_NAME = "Ryan";

//Ryan
echo FIRST_NAME;

function test() {
	//This works! Constants are in the global scope!
	echo FIRST_NAME;
}
