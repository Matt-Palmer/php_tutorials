<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php

	//in php a variable is always declard by starting with a '$' sign, see the examples below 
 	
 	$name = 'matt';
 	$number = 2;
 	$number_two = 5;
 	$boolean = true;

 	//unlike the majority of programming languages, php does not require a type value (string, int, boolean etc) to be assigned. 


 	//below are a few examples of how a user can output variables, using the variables created above.
 	echo 'my name is $name';
 	echo 'my favourite number is the number ' . $number; //a '.' is used to concatenate variables to a string.
 	echo $number + $number_two;

 	//a variable declared outside of a function is a global variable and can only be accessed outside a function, see example below.
 	$global_variable = 'global variable';//global scope variabl

 	function test_for_global_variable(){
 		echo '<p>variable "global_variable" equals: $global_variable</p>';//using the global variable inside the function should throw an error
 	}

 	test_for_global_variable();//calling the function

 	echo '<p>variable "global_variable" equals: $global_variable</p>';//value for this echo should be 'global variable'

 	function test_for_local_variable(){
 		$local_variable = 'local variable';

 		echo '<p>variable "local_variable" equals: $local_variable</p>';//value for this echo should be 'local variable'
 	}

 	test_for_local_variable();

 	echo '<p>variable "local_variable" equals: $local_variable</p>';//using the local variable outside the function should throw an error

 	//although global variables cannot be accessed directly, they can still be accessed by using the 'global' keyword.
 	function access_to_global_variable(){

 		global $global_variable;//global keyword

 		echo '<p>variable "global_variable" equals: $global_variable</p>';//using the 'global' keyword, the global variable will no longer throw an error 
 	}

 	access_to_global_variable();
 ?>
</body>
</html>