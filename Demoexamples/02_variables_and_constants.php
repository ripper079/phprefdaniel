<?php

//enforce strict typing in PHP functions
// only a value corresponding exactly to the type declaration will be accepted; otherwise a TypeError will be thrown
declare(strict_types=1);

/* --------- PHP Data Types --------- */
/*
Scalar Types
    - String - A string is a series of characters surrounded by quotes
    - Integer - Whole numbers
    - Float - Decimal numbers
    - Boolean - true or false

Compund Types
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

/* Constants */
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

/**
 * String here
 */
$myFirstName = "Daniel";
$myLastName="Oikarainen";
$fullName = "Daniel $myLastName";               //Works
$fullNameAlt = '$myFirstName Oikarainen';       //Do NOT work as intended
$myAge=43;
$myBirthDate=new DateTime('1979-12-16 00:00:00');
$location = "Sweden";
$location .= " in Boras";                       //Concatenate

echo 'My name is ' . $myFirstName . ' ' . $myLastName . "<br>";
echo "And i $myAge year(s) old<br>";
echo "Living place=" . $location . "<br>";
echo "Concatenated fullname Ver 1=" . $fullName . "<br>";
echo "Concatenated fullname Ver 2=" . $fullNameAlt . "<br>";

/**
 * Here docs
 */

$heredocString = <<<CONTACT
Fullname = $myFirstName $myLastName
Age = $myAge
location = $location;
CONTACT;
echo "----------------------------------<br>";
//echo $heredocString;      //Not the best way
echo nl2br($heredocString);

$formattedHeredoc = <<<FORMATTEDCONTACT
<h1>$myFirstName $myLastName</h1>
<h3>$myAge year(s) old</h3>
<h6>Location= $location</h6>
FORMATTEDCONTACT;
echo "----------------------------------<br>";
echo $formattedHeredoc;

/**
 * Now docs
 * Pratically the same as heredocs but with the difference that they are treated as single quotes and the identifier must be surronden with ''
 * E.i 'CONTACT' and 'FORMATTEDCONTACT'
 */


$completed = true;              //bool
$score = 39;                    //int
$price = 24.99;                 //float
$greeting = "Hello Daniel";     //string





//Caution both are actually equal
$sum = 5 + 31;
$trickySum = '5' + '31';

//var_dump($sum);
//var_dump($trickySum);
