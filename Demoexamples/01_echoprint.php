<?php

declare(strict_types=1);

//Be mindful when working with echo and string interpolation, especially when using ' and " in php. Sometimes it is unpredicable behaviour

//Declare a country variable
$countries = "Sweden, Finland, Poland, Thailand";

//Lets start with the basics
echo 'Hello', ' ', ' PHP', ' lets have fun<br>';            // Hello PHP lets have fun
echo "Hello", " ", " PHP", " lets have more fun<br><br>";       //Hello PHP lets have more fun

//Countries that rock
echo 'Countries that rock $countries<br>';                  //Countries that rock $countries
//string interpolation
echo "Countries that rock $countries<br>";                  //Countries that rock Sweden, Finland, Poland, Thailand
//string interpolation but MUCH more clear
echo "Countries that rock {$countries}<br><br>";            //Countries that rock Sweden, Finland, Poland, Thailand

$animal = 'dog';
// This will look for a variable named $animalwalker
echo "I have a pet $animalwalker";                                  // Undefined variable $animalwalker    
// This correctly uses the $animal variable and appends 'walker'        
echo "I have a pet {$animal}walker<br><br>";                        //I have a pet I have a pet dogwalker

//Single value
$returnValueFromPrint =  print 'One can print one value<br>';
print 'The return value is $returnValueFromPrint<br>';              // The return value is $returnValueFromPrint
print 'The return value is ' . $returnValueFromPrint . '<br>';      // The return value is 1
print "The return value is $returnValueFromPrint<br>";              // The return value is 1
print 'The return value is {$returnValueFromPrint}<br><br>';            // The return value is {$returnValueFromPrint}

//Arrays
print_r([11,15,39,44]);                     //( [0] => 11 [1] => 15 [2] => 39 [3] => 44 )
echo "<br>";
//More detailed info
var_dump('Hello');                  //string(5) "Hello" 
echo "<br>";
var_dump(true);                     //bool(true) 
echo "<br>";
//String representation
var_export('Hello');                //'Hello'

// exit();
// error_log();
