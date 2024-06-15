<?php

//enforce strict typing in PHP functions
// only a value corresponding exactly to the type declaration will be accepted; otherwise a TypeError will be thrown
declare(strict_types=1);

function display_pretty($pArrayToDislay)
{
    echo "<pre>";
    print_r($pArrayToDislay);
    echo "</pre>";
}




// How type conversion applies to different variables are best viewed at page
//  https://www.php.net/manual/en/ref.var.php

// Well the general form of a function for knowing a type value on a value (remember that php is typeless) is
// <datatype>val()
// Note 1: This function is also used for convert string->int, string->float, int->string, float->string aka conversion functions
// Note 2: These conversion functions can also be substitused with type casting (int)$variablename

//And for doing a type check, the general form of a function is
// is_<datatype>()

//There are also some combined or misc functions for this
// ia_array($var), is_object($var), is_resource($var), is_scalar($var), is_callable($var), is_iterable($var)


//Som function for checking status about a variable is

// 1
// isset()
//      check if a variable is declared(aka set) and is NOT null
//      Note: Useful when checking if a parameter is declared och checking variables

// 2 
// unset()
//      Unset (un-declares) a variable

// 3
// gettype($var)
//      Return the type name (in string)

// 4
// get_defined_vars()
//      Returns an array of all defined variables in current scope. The key will be the variablename (without $). 

/*
// 1 and 2
$myLuckyNumber = 12;
echo $myLuckyNumber . "<br><br>";
unset($myLuckyNumber);
// echo $myLuckyNumber;        //Gone, Generates, ERROR. Maybe you need to set the error level in php.ini for this to generate errror
*/

/*
// 3
$firstName = "Dan";
$age = 43;
$isMarried = true;

echo $firstName . " is of type " . gettype($firstName) . "<br>";        //string
echo $age . " is of type " . gettype($age) . "<br></br>";               //integer
echo $isMarried . " is of type " . gettype($isMarried) . "<br>";        // boolean
*/


// 4
/*
$unLukcyNumber = 666;

$speakNumbers =[
    "nineteen" => 19,                   
    "two" => 2,
    "twelwe" => 12,
    "thirtythree" => 33,
    "twentysix" => 26
]; 

display_pretty(get_defined_vars());     // [ _GET => [], _POST  => [], _COOKIE => [], _FILES => [],  "unLukcyNumber" => 666  , "speakNumbers"  => [ "nineteen" => 19, "two" => 2, "twelve" => 12, "thirtythree" => 33, "twentysix" => 26 ] ]
*/
