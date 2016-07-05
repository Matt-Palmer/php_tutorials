<!DOCTYPE html>
<html>
<head>
	<title>PHP Strings</title>
</head>
<body>
<?php
	
//the php function strlen() returns the length of a string, see the example below 
$string_length = "what is the length of this string?";
echo strlen($string_length);//the output of this string will be 33 

//the function str_word_count() will count the amount of words in a string, see the example below
$words_in_string = "there are seven words in this string";
echo str_word_count($words_in_string);//output will be 7

//the function strrev() reverses the string
$reverse_string = "reverse this string"
echo strrev($reverse_string);//the output of his string will be gnirts siht esrever

//the strpos() function is used to search for a specific ext within a string
//if a match is found then the output will return the index position of the first character in that word, see the example below
$find_this_word = "found";
echo strpos("can this word be found?", $find_this_word);//output returned should be 17

//str_replace() replaces one character with another within a sring
$replace_this = "matt";
$with_this = "world";

echo str_replace($replace_this, $with_this, "Hello matt");//output should be Hello world
?>

	<a href="php_data_types.php">PHP Data Types</a>
 	<a href="php_constants.php">PHP Constants</a>
</body>
</html>