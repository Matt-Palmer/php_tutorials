<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
		<!--
		A php script can be placed anywhere in the document, aslong as the code is placed between php tag lines.
		-->
		<?php

			//in terms of built in functions and classes, php is not case sensitive see the example below:
			//echo is a built in function of php, used to print information onto the document page.
			echo "Text printed to the document <br>";
			ECHO "This text is also printed to the document <br>";
			EcHo "And so is this <br>";
			
			//however, all variable names are case sensitive, see the example below:
			$name = "matt";

			echo "my name is " . $name . "<br>";//only this line will be called as the variable name for the other 2 are incorrect
			echo "my name is " . $NAME . "<br>";
			echo "my name is " . $NaMe . "<br>";

		?>

		<a href="php_variables.php">PHP Variables</a>
	</body>
</html>