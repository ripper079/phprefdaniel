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

# sort($array)
#   it modifies the existing array
#   sort an array in ascending order. Always returns true (cation when passing this value to a function that accepts an array and insteed get a boolean value)
#   Note: It also reindexes the key,  so that start at 0. Ignores the key completely

# rsort($array)
#   Identical use as sort but it sorts in descending order

# asort($arrayAssociative)
#   it modifies the existing array
#   sort an associative array while MAINTAINING key values

# arsort($arrayAssociative)
#   Identical use as arsort but it sorts in descending order

# ksort()
#   it modifies the existing array
#   sort by keys. The values are not changed (of course)

# krsort()
#   Identical use as ksort but it sorts in descending order

# usort()
#   it modifies the existing array
#   the sorting as user-defined

//Has keys 0,1,2,3,4
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

/*
// 1 
sort($luckyNumbers);         
sort($speakNumbers);        
sort($squareNumbers);  
print_pretty_array($luckyNumbers);   //     [ 0 => 12, 1 => 16, 2 => 69, 3 => 79, 4 => 999 ] OR [12, 16, 69, 79, 999]
print_pretty_array($speakNumbers);  //      [ 0 => 2, 1 => 12, 2 => 19, 3 => 26, 4 => 33 ] OR [2, 12, 19, 26, 33]
print_pretty_array($squareNumbers); //      [ 0 => 4, 1 => 9, 2 => 25, 3 => 36, 4 => 49, 5 => 81 ] OR [4, 9, 25, 36, 49, 81]

*/

/*
// 2 
asort($luckyNumbers);         
asort($speakNumbers);        
asort($squareNumbers);  
print_pretty_array($luckyNumbers);   //     [ 3 => 12, 4 => 16, 0 => 69, 1 => 79, 2 => 999 ]
print_pretty_array($speakNumbers);  //      [ "two" => 2, "twelwe" => 12, "nineteen" => 19, "twentysix" => 26, "thirtythree" => 33 ]
print_pretty_array($squareNumbers); //      [ 2 => 4, 3 => 9, 5 => 25, 6 => 36, 7 => 49, 9 => 81 ]
*/

// 3
ksort($luckyNumbers);         
ksort($speakNumbers);        
ksort($squareNumbers);  
print_pretty_array($luckyNumbers);   //     [ 0 => 69, 1 => 79, 2 => 999, 3 => 12, 4 => 16 ]
print_pretty_array($speakNumbers);  //      [ "nineteen" => 19, "thirtythree" => 33, "twelwe" => 12, "twentysix" => 26, "two" => 2 ]
print_pretty_array($squareNumbers); //      [ 2 => 4, 3 => 9, 5 => 25, 6 => 36, 7 => 49, 9 => 81 ]