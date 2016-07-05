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
			echo $colors[i];//???does this print out???
		}

		//an object is a data type that stores data, and information on how to process that data
		//an object must be explicitly declared

		//to declare an object, first we need to create a class, a class is a structure hat contains properties and methods
		//see the example below

		/**
		* 
		*/
		class color
		{
			
			function color()
			{
				$this -> shade = 'blue';
			}
		}

		//next we create the object
		$color_blue = new color();

		//show the object properties
		echo $color_blue->shade;

		//the NULL data type can only have one value, NULL.
		//a variable with a data type of NULL hass no value attached to it 
		$null_value = NULL;
		$null_value_two; //a variable without a value set will automatically be set to NULL

		echo $null_value;
		print($null_value_two);

		//variables with an assigned value can be set back to NULL
		$assigned_variable = "Hello";
		$assigned_variable = NULL;

		echo $assigned_variable;
	?>

	<a href="php_echo_print.php">PHP Echo and Print</a>
 	<a href="php_strings.php">PHP Strings</a>
</body>
</html>