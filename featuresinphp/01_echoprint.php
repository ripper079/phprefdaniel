<?php

declare(strict_types=1);

//Declare a country variable
$countries = "Sweden, Finland, Poland, Thailand";

//Lets start with the basics
echo 'Hello', ' ', ' PHP', ' lets have fun<br>';
echo "Hello", " ", " PHP", " lets have more fun<br><br>";

//Countries that rock
echo 'Countries that rock $countries<br>';
echo "Countries that rock $countries<br><br>";


//Single value
$returnValueFromPrint =  print 'One can print one value<br>';
print 'The return value is $returnValueFromPrint<br>';
print 'The return value is ' . $returnValueFromPrint . '<br>';
print "The return value is $returnValueFromPrint<br>";


//Arrays
print_r([11,15,39,44]);
//More detailed info
var_dump('Hello');
var_dump(true);
//String representation
var_export('Hello');
