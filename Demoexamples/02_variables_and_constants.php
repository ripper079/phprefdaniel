<?php

//enforce strict typing in PHP functions
// only a value corresponding exactly to the type declaration will be accepted; otherwise a TypeError will be thrown
declare(strict_types=1);

/* Constants */

/* --------- PHP Data Types --------- */
/*
Scalar Types
    - String - A string is a series of characters surrounded by quotes
    - Integer - Whole numbers
    - Float - Decimal numbers
    - Boolean - true or false

Compound Types
    - Array - An array is a special variable, which can hold more than one value
    - Object - A class
    - Callable
    - Iterable

Special  Types
    - NULL - Empty variable
    - Resource - A special variable that holds a resource

MISC
    - Constants - A value that is not changed. Is in the global scope
*/
/* Static variables */


/**
 * The first way
 */
define("LAST_PLANET_OUR_SOLAR_SYSTEM", "Pluto");
$lastPlanet = defined("LAST_PLANET_OUR_SOLAR_SYSTEM");  //return 1 if defined
//var_dump($lastPlanet);
if ($lastPlanet) {
    //Observe that the $ is NOT used in conjunction with constants
    echo "Last planet is defined and the planet is " . LAST_PLANET_OUR_SOLAR_SYSTEM . "<br>";
} else {
    echo "Last planet is NOT defined<br>";
}
//var_dump(defined("UNKNOWN_PLANET"));
if (defined("UNKNOWN_PLANET")) {
    echo "Unknown planet is defined<br>";
} else {
    echo "Unknown planet is NOT defined<br>";
}

/* Constants */
/**
 * The Second way way
 */

const OUR_PLANET_SOLAR_SYSTEM = "Earth";
echo "Our planet is " . OUR_PLANET_SOLAR_SYSTEM . "<br>";

/**
 * Variable declaration
 */


//Globally declared in this file 
$completed = true;              //bool
$score = 39;                    //int
$price = 24.99;                 //float
$greeting = "Hello Daniel";     //string

//Old way of declare an array
$arrayOld = array(1,4,5,6,11,2);

//Short(new) way of declare an array
$arrayNew = [1,4,5,6,11,2];

//Associative Arrays
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Using the short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

//Caution both are actually equal
$sum = 5 + 31;
$trickySum = '5' + '31';

//var_dump($sum);
//var_dump($trickySum);

//Demonstrates scope of variables
function foo(){
    //echo "Inside foo. " . $price . "</br>";       //This will not work, no access to global scope
    global $greeting;                               //Now you have access to variable defined in the global scope
    echo "Global variable is=" . $greeting . "<br />";  //Now it works
    echo "Access global variable through php associate array GLOBAL=" . $GLOBALS['score'] . "<br />";   //Aka superglobals
}

function fooStatic(){
    static $counterHit = 0;             //Only initialized once and the scope is limited to this function
    $counterHit++;
    echo "Number of times invoking this function=" . $counterHit . "<br />";

}

foo();
fooStatic();
fooStatic();
fooStatic();
