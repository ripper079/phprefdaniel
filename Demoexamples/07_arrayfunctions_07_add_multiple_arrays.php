<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//https://www.php.net/manual/en/ref.array.php

//Make the array visual readable
function print_pretty_array($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

# array_merge($arrayOne, $arrayTwo, ...)
#   Creates a new array, do NOT modify existing one 
#   Loops through each value in the $arrayMapSource and applies an operation(callbackFunction) the each value and returns that values to the new element
#   Takes the value from each array(the same order as the parameter passed) and creates a new one. It doens take each parameter $array key into consideration, but discards them


# array_intersect($arrayOne, $arrayTwo, ...)
#   Creates a new array, where the the same value are present  

//Keys 0, 1, 2, 3, 4
$luckyNumbers = [69, 79, 999, 12, 16]; 
$names = [
    "Daniel", "Joe", "Jen", "Alexi"
];

//Has key 3,5,7,2,9,6
$squareNumbers = [
    3 => 9,
    5 => 25,
    7 => 49,
    2 => 4,
    9 => 81,
    6 => 36
];

$array1 = [45, 12, 0, 46, 30];
$array2 = [30, 45, 11, 12, 121];
$array2 = [22, 11, 131, 46, 136, 12];


// 1
/*
$mergedArray = array_merge($luckyNumbers, $names, $squareNumbers);

print_pretty_array($luckyNumbers);
print_pretty_array($names);
print_pretty_array($squareNumbers);
print_pretty_array($mergedArray);   // [ 0 => 69, 1 => 79, 2 => 999, 3 => 12, 4 => 16, 5 => Daniel, 6 => Joe, 7 => Jen, 8 => Alexi, 9 => 9, 10 => 25, 11 => 49, 12 => 4, 13 => 81, 14 => 36 ]
*/

$interSectSameValues2Array = array_intersect($array1, $array2);
//$interSectSameValues3Array = array_intersect($array1, $array2, $array3);

print_pretty_array($interSectSameValues2Array);
