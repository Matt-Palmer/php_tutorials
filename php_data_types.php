<!DOCTYPE html>
<html>
<head>
	<title>PHP Data Types</title>

	<link rel="stylesheet" type="text/css" href="php_style.css">
</head>
<body>
<?php

	echo "<h1 class="'php-heading'"></h1>";

	//a string can be an text inside quotes, using either single or double quotes. see the examples below.
	$double_quotes = "This string is using double quotes";
	$single_quotes = 'This string is using single quotes';

	//an integer is a whole number

	//Rules for integers
	/*
		an integer must have atleast 1 digit
		must not be a decimal 
		can be either positive or negative
	*/

	//integer example below
	$int_number = 10;

	var_dump($int_number); //var_dump() is a function that returns the data type and value

	print("This is an example of an integer " . $int_number);

	//a float is a number with a decimal, see the example below
	$float_number = 12.02;

	var_dump($float_number);

	echo "This is an example of a float " . $float_number;

	//a boolean can only be one of two states, either TRUE or FLASE, see the example below
	$boolean_true = true;
	$boolean_false = false;

	var_dump($boolean_false);
	var_dump($boolean_true);

	//arrays are used to store multiple values into one variable, see example below
	$colors = array('blue','red','yellow','green');

	for ($i=0; $i < $colors.length; $i++) { 
		echo $colors[i];
	}
?>
</body>
</html>