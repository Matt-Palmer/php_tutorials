<!DOCTYPE html>
<html>
<head>
	<title>PHP While Loops</title>
</head>
<body>
<?php
//the while loop executes a block of code as long as the condition set remains ture
$i = 1;

while ($i <= 10) {
	echo $i;
	$i++;
}

//the do while loop will always run a block of code once, after it will check the condition and if it is still tru it will continue to run
$x = 1;

do{
	echo $x;
	$x++
}while ($x <= 20);


//the do while example below will only run once, the while statement is only checked after the do statment has run once
$y = 11;

do{
	echo $y;
	$y++
}while ($y <= 10)
?>
<a href="php_if_else.php">PHP If...Else...Elseif</a>
<a href="php_for_loops.php">PHP For Loops</a>
</body>
</html>