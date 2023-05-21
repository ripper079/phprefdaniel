<?php
//enforce strict typing in PHP functions
// only a value corresponding exactly to the type declaration will be accepted; otherwise a TypeError will be thrown
declare(strict_types = 1); 

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

define("LAST_PLANET_OUR_SOLAR_SYSTEM", "Pluto");

$myFirstName = "Daniel";
$myLastName="Oikarainen";
$myAge=43;
$myBirthDate=new DateTime('1979-12-16 00:00:00');
echo 'My name is ' . $myFirstName . ' ' . $myLastName . "<br>";
echo "And i $myAge year(s) old<br>";


//Caution both are actually equal
$sum = 5 + 31;
$trickySum = '5' + '31';

var_dump($sum);
var_dump($trickySum);
$version = phpversion();
echo "PHP version is $version<br>";
echo "Constant is " . LAST_PLANET_OUR_SOLAR_SYSTEM . "<br>";
//$infoAboutPhp = phpinfo();
//echo "Detailed info: $infoAboutPhp";
?>
