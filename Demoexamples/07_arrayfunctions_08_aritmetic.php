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

#   -------------- ARITHMETIC FUNCTIONS --------------
#   All functions here returns a single value - aggregate operations

//21
# array_sum($arrayToCompute)
#   Do NOT modify existing $arrayToCompute
#   Calculates the sum of values in an array.
#   Note: int and float, preferable

// 2
# array_product($arrayToCompute)
#   Do NOT modify existing $arrayToCompute 
#   Calculates the product of values in an array
#   Note: int and float, preferable

// 3
# array_count_values($arrayToCompute)
#   Do NOT modify existing $arrayToCompute 
#   Counts the VALUES in an array and returns an associative array with values as keys and their count as values.

// 4
# array_reduce($arrayToCompute, $callBackFunction)
#   Do NOT modify existing $arrayToCompute 
#   Reduces an array to a single value using a callback function, useful for cumulative arithmetic operations.

//
$salaryEachMonth = [ 23000, 31000, 28000, 12000, 16000, 22000, 23000, 31000, 28000, 12000, 16000, 22000 ]; 
$groceryPrice = [ 23.4, 12.42, 67.01, 11.52 ];

$valuesDimension = [ 11, 2, 6 ];

$dummyValues = [66, 11, 57, 66, 101, 66, 150, 11, 66, 101];


//Add all values together into a single sum
$totalSalary = array_sum($salaryEachMonth);                     // 264000
$totalPriceGrocery = array_sum($groceryPrice);                  // 114.35

// 1
echo 'Total salary over a year: ' . $totalSalary . '<br>';              
echo 'Total price for grocery is: ' . $totalPriceGrocery . '<br>';      

//2
$totalVolume = array_product($valuesDimension);                 // 132
echo 'The volume of ' . $valuesDimension[0] . "x" . $valuesDimension[1] . "x" . $valuesDimension[2] . " is= " . $totalVolume . "<br>";     

//3 
$countOccurencies = array_count_values($dummyValues);
print_pretty_array($countOccurencies);      // [ 66 => 4, 11 => 2, 57 => 1, 101 => 2, 150 => 1 ]

// 4 
$cumulativeAmount = array_reduce($dummyValues, function($carry, $currentItem)
{
    //This will be the new carry item..
    return ($carry + $currentItem);
});                                             //  695

echo "Cumlative amout is= " . $cumulativeAmount . "<br>";