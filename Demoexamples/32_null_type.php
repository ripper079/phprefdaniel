<?php

echo "Displaying null types...<br>";

/**
 * Null data type
 * 3 cases that it can be null
 */
//Case 1 (Setting to null value)
$y = null;
echo $y;    //Nothing(empty), converting to an empty string
echo "var_dump...<br>";
var_dump($y);       //NULL

//Case 2 (Not defined)
var_dump(is_null($abcqwerty));  // Return true (and course warning for undefined variable)

//Case 3 (unseting a value)
$numberOneTwoThree = 123;
var_dump($numberOneTwoThree);
unset($numberOneTwoThree);
var_dump($numberOneTwoThree);

echo "<br>";
//Casting
$x = null;

//var_dump((string) $x);          //string(0) ""
//var_dump((int) $x);                 //int(0)
//var_dump((bool) $x);                    //bool(false)
//var_dump((array) $x);                       //array(0) { }

if (is_null($y)) {
    echo "Is null";
} else {
    echo "Is NOT null";
}
