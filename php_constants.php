<!DOCTYPE html>
<html>
<head>
	<title>PHP Constants</title>
</head>
<body>
<?php
	/*
	a constant is a name for a simple value. the value cannot be changed during the script.

	a VALID constant starts with a letter or underscore

	unlike variables, constants are automatically global throughout the entire script
	*/

	//to create a constant we use the define() function
	/*
		define(name, value, case-insensitive);

		name = specifies the name of the constant
		value = specifies the value of the constant
		case-insensitive = specifies wheter the constant name should be case-insensitive, default value for this is false
	*/

	//the example below creates a constant with a case-sensitive name
	define("GREETING", "Hello and welcome!");
	echo GREETING;

	//the example below creates a constant that is case-insensitive
	define("HELLO", "Hello there!!", true);
	echo hello;

	//constants are Global, meaning they can be defined outside a function and used within them 
	define("global", "this is declared outside of this function");

	function callingGlobalContsant(){
		echo GLOBAL;
	}

	callingGlobalContsant();

?>
<a href="php_strings.php">PHP Strings</a>
<a href="php_if_else.php">PHP If...Else...Elseif</a>
</body>
</html>