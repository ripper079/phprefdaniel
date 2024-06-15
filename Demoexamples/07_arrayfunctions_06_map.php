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


#   The array_map() function is used to transforming each element in an array. ALWAYS the same number of elements as the $sourceArray

# map($callbackFunction, $arrayMapSource)
#   Returns a new array. 
#   Loops through each value in the $arrayMapSource and applies an operation(callbackFunction) the each value and returns that values to the new element
#   For each element get maped and stored in the new array based on some operation defined by the $callbackFucntion
#   Note: It the value of the element that is getting mapped. The new array has the key 0,1,2,3....count($arrayMapSource)

$luckyNumbers = [69, 79, 999, 12, 16]; 


//Has keys "nineteen", "two", "thirtythree", "twentysix"
$speakNumbers =[
    "nineteen" => 19,                   
    "two" => 2,
    "twelwe" => 12,
    "thirtythree" => 33,
    "twentysix" => 26
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

$listDoubleUpLuckyNumbers = array_map(function($element)
{
    return $element * 2;
}, $luckyNumbers);

$keysOfSpeakNumbers = array_keys($speakNumbers);
$valuesOfSpeakNumbers = array_keys($speakNumbers);
//Even possible to create new object and pass the key with little pre work
$listOfFakePersons = array_map(function($theKey, $theValue)
{
    $fakePerson = new stdClass();
    $fakePerson->fullName = "Person- " . $theKey;
    $fakePerson->age = $theValue;

    return $fakePerson;
}, $keysOfSpeakNumbers, $valuesOfSpeakNumbers);

print_pretty_array($luckyNumbers);              // [ 0 => 69, 1 => 79, 2 => 999, 3 => 12, 4 => 16 ]
print_pretty_array($listDoubleUpLuckyNumbers);  // [ 0 => 138, 1 => 158, 2 => 1998, 3 => 24, 4 => 32 ]
print_pretty_array($listOfFakePersons);