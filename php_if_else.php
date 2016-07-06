<!DOCTYPE html>
<html>
<head>
	<title>PHP if...else...elseif</title>
</head>
<body>
<?php
	//the if statement executes code if a specified condition is met
	$time = date("H");

	if ($time < "20") {
		echo "Good morning!";
	}

	//the if else statement will execute some code if a condition is met, else if its not me it then executes the other code
	if($time < "19"){
		echo "Good Morning";
	}else{
		echo "Good Night";
	}

	//the if elseif if statement executes code if either the if condition is met or if the elseif condition is met, if neither of these conditions are met then the else statemnt will be run
	if($time < "12"){
		echo "Good Morning";
	}elseif ($time < "18") {
		echo "Good Afternoon";
	}else{
		echo "Good Evening";
	}

	//the switch statment syntax:
	/*
	switch(condition){
		case value:
		....CODE TO BE EXECUTED

		break;

		case value2:
		....CODE TO BE EXECUTED

		break;

		defualt:
		....This code will be called if none of the above statements are called
	}
	*/

	$fav_color = "blue";

	switch ($fav_color) {
		case 'red':
			echo "Your favorite color is red";
			break;
		case 'blue':
			echo "Your favorite color is blue";
			break;
		
		default:
			echo "your favorite color is not red or blue";
			break;
	}
?>
<a href="php_constants.php">PHP Constants</a>
<a href="php_while_loop.php">PHP While Loops</a>
</body>
</html>