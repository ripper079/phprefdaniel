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

#   -------------- MISC FUNCTIONS --------------

// 1
# flip($arraySource)
#   Creates a new array, do NOT modify existing one 
#   Flips key for value and value for keys
#   Note: "New" key needs to be valid, int or string

// 2
# array_unique($arraySource)
#   Creates(returns) a new array, do NOT modify existing one 
#   Removes duplicate VALUES from an array
#   Note: Keys are NOT reindexed.

// 3
# array_intersect($arrayOne, $arrayTwo, ...)
#   Creates(Returns) a new array, do NOT modify existing one 
#   Returns the values that are present in all the arrays(2 or more) and Creates a new array. 

// 4
# array_walk($arrayToCompute)
#   Creates a new array, do NOT modify existing one 
#   Applies a user-defined function to every element(the value) of an array.
#   This function modifies the $arrayToCompute

// 5 
# array_reverse($arrayToBeFlipped)
#   Creates(Returns) a new array, do NOT modify existing one 
#   Create a new array in the reverse order. The keys will be rearranged. The last item will appear as the first and so on...

$doubleValues = [66, 11, 57, 66, 101, 66, 150, 11, 66, 101];

$dummyValues = [
    "sixtsix" => 66,
    "fiftyfive" => 57,
    "eleven" => 11,
    "hundredone" => 101,
    "hundredfifty" => 150
];

$valuesOne = [ 11, 2, 6 , 25, 141, 124];
$valuesTwo = [ 110, 22, 11 , 25, 6];

/*
// 1
$reveredDummyValues = array_flip($dummyValues);
print_pretty_array($reveredDummyValues);    // [ 66 => "sixtsix", 57 => "fiftyfive", 11 => "eleven", 101 => "hundredone", 150 => "hundredfifty" ]
*/


/*
// 2
$uniqueDummyValues  = array_unique($doubleValues);
print_pretty_array($uniqueDummyValues);     // [ 0 => 66, 1 => 11, 2 => 57, 4 => 101, 6 => 150 ]
*/

/*
// 3
$commonValues = array_intersect($valuesOne, $valuesTwo);
print_pretty_array($commonValues);          // [ 0 => 11, 2 => 6, 3 => 25 ]
*/

/*
// 4
array_walk($valuesOne, function(&$element) 
{
    $element =  2 * $element;
});

print_pretty_array($valuesOne);
*/

//5 

$flippedArray = array_reverse($dummyValues);

print_pretty_array($flippedArray);

