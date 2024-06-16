<?php

declare(strict_types = 1);


//Make the array visual readable
function print_pretty($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


//God separator to use include 
//  Pipe character:   |
//  Tilde:            ~
//  Caret:            ^
//  Backtick:         `


// 1
# implode($separator, $arraySource)
#   Joins array elements to a string. The delimiter is the $separator
#   Returns a string containing the elements + delimiter


// 1
$arrayOfNames = [ "Dan", "Jen", "Alexi", "Nat", "Pelle"];
$stringManyNames = implode("|", $arrayOfNames);           //Convert array of strings to one string

echo "{$stringManyNames}<br>";        //Dan|Jen|Alexi|Nat|Pelle

$stringManyFoods = "Pizza|Tom Yum|Hamburger|Lasagna|Sushi|Thai Pad|Spaghetti Bolognese";

$arrayOfFoods = explode("|", $stringManyFoods);   
print_pretty($arrayOfFoods);                  // [ 0 => "Pizza", 1 => "Tom Yum", 2 => "Hamburger", 3 => "Lasagna", 4 => "Sushi", 5 => "Thai Pad", 6 => "Spaghetti Bolognese" ]

