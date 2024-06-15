<?php

declare(strict_types = 1);

//Regular strings
//    https://www.php.net/manual/en/ref.strings.php

// Multibyte strings
//    https://www.php.net/manual/en/ref.mbstring.php

/* ---------- String Functions -------- */
// Note 1
//    For handling multibyte character (non-ASCII) you should use the multibyte string functions insteed.
//    They are almost identical with regular string function but you prefix each function with mb_
//    Ei mb_strlen(), mb_strpos(), mb_substr() and so on...

// Note 2
//    String function create new string. They do not modify existing string
//    string are immutable. They can NOT be changed after they have been created

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string) . "<br>";        // 11
echo "<br>";

// Find the position of the first occurrence of a substring in a string. Based on index that start with 0 
echo strpos($string, 'o');          // 4
echo "<br>";

// Find the position of the last occurrence of a substring in a string. Based on index that start with 0 
echo strrpos($string, 'o');       //7
echo "<br>";

// Reverse a string
echo strrev($string);             //dlroW olleH
echo "<br>";

// Convert all characters to lowercase
echo strtolower($string);         //hello world
echo "<br>";

// Convert all characters to uppercase
echo strtoupper($string);         //HELLO WORLD
echo "<br>";

// Uppercase the first character of each word
echo ucwords($string);            //Hello World
echo "<br>";

// String replace (do NOT change source string variable)
echo str_replace('World', 'Everyone', $string);       //Hello Everyone
echo "<br><br>";

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5) . "<br>";      //Hello
echo substr($string, 5) . "<br>";         //World
echo "<br>";

// Starts with
if (str_starts_with($string, 'Hello')) 
{
  echo 'YES<br>';             //YES
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'yyeess<br><br>';      //yyeess
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2) . "<br>";     // <h1>Hello World</h1>

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy');     //Brad is a nice guy
echo "<br>";
//float
printf('1 + 1 = %f', 1 + 1); // 1 + 1 = 2.000000

?>
