<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		//in php there are two basic ways to output data, echo or print

		/*
		echo and print are more or less the same thing, but wuth a few small differences. 

		echo has no return value, where as print has a value of 1, this means it can be used in expressions.
		echo can take multiple parameters while print can only take 1 argument.
		echo is marginally faster than print.
		*/

		//the echo statment can be used with or without parentheses '()' echo or echo()
		echo "<h2>PHP echo</h2>";
		echo "Hello World! <br>";
		echo "I am learning PHP";
		echo "this ", "string was made ", "with multiple ", "parameters.";

		$text_one = "text one";
		$text_two = "text two";
		$number_one = 3;
		$number_two = 8;

		//below are examples of using echo to output variables
		echo $text_one;
		echo "this is " . $text_two . "!";
		echo ($number_two + $number_one);

		//the print statement can be used with or without parentheses '()' print or print();
		print "<h2>PHP print</h2>";
		print "Hello world<br>";
		print "I am learning php";

		//below are examples of using print with variables
		print("<h3>$text_one</h3>");
		print "this is number " . $number_two;
		print("<p>3 + 8 = $number_one + $number_two</p>")
	?>

	<a href="php_variables.php">PHP Variable</a>
 	<a href="php_data_types.php">PHP Data Types</a>
</body>
</html>