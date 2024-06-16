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

# There are many ways of actually adding and removing items in an array and they behaves little different with regular arrays and associative arrays. Be aware

# 1
# Adding elements
# With FUNCTIONS
# array_push($array, $value, $value2, ....)
#   it modifies the existing array
#   pushes the $value at the end of the array.
#   Normal array: key or index is usually incremented by one from the highest current present key value. This may not be 100% accurate due the fact that key are not always ordered in 0,1,2,3...
#   Associative array: Will add the elements with NUMERIC keys starting from the next available index. Note NUMERIC
#   Note: This method is NOT suitable of pushing items with key/value pair becuase it assigns a new NUMERIC key(s)
#   Note: Add mulitple item in one function call

# 2
# With bracket notation
# $array[] = $oneMoreValue or $array['newKeyName'] = $oneMoreValue
#   it modifies the existing array
#   pushes the $value at the end of the array.
#   Normal array: key or index is usually incremented by one from the highest current present key value. This may not be 100% accurate due the fact that key are not always ordered in 0,1,2,3...
#   Associative array: Will add the elements with value $oneMoreValue for the key 'newKeyName'. If the 'newKeyName' is present, then it overwrites current value with new
#   Note: Better(faster) solution when addding a single element

# 3
# Removing elements
# With FUNCTIONS
# array_pop($array) - Removes/pop the element at the END of the array
#   Return the deleted element of null if array is empty

# 4 Remving elements
# array_shift($pArray)
#   Removes the first element in the array $pArray
#   Returns the removed element. It also re-index after its operation
#   Note: Usually "safe" to use with associative arrays because key are not affected. Normal arrays get reindexed.

# 5
# With function
# unset($array[keyvalue])
# Deletes an element with it corresponding key
# Deletes/removes the element in the array $array with the given key keyvalue. Make sure that the key exist first or unset will igonre the operation. Works for index and associative arrays
# NOTE - Return nothing(void). Do NOT reindex keys in array


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


//------------------------------ ADDING elements------------------------------ 
/*
//1

$elementToPush = 1;
//Add elements
array_push($luckyNumbers, $elementToPush);
array_push($speakNumbers, $elementToPush);
array_push($squareNumbers, $elementToPush);

print_pretty_array($luckyNumbers);      // [ 0 => 69, 1 => 79, 2 => 999, 3 => 12, 4 => 16, 5 => 1 ]
print_pretty_array($speakNumbers);      // [ "nineteen" => 19, "two" => 2, "twelwe" => 12, "thirtythree" => 33, "twentysix" => 26, 0 => 1 ]
print_pretty_array($squareNumbers);     // [ 3 => 9, 5 => 25, 7 => 49, 2 => 4, 9 => 81, 6 => 36, 10 => 1 ]
*/

/*
// 2 
$luckyNumbers[] = 121;
$speakNumbers['strangekeyhere'] = 121;
$squareNumbers['strangekeyhere'] = 121;

print_pretty_array($luckyNumbers);      // [ 0 => 69, 1 => 79, 2 => 999, 3 => 12, 4 => 16, 5 => 121 ]
print_pretty_array($speakNumbers);      // [ "nineteen" => 19, "two" => 2, "twelwe" => 12, "thirtythree" => 33, "twentysix" => 26, "strangekeyhere" => 121 ]
print_pretty_array($squareNumbers);     // [ 3 => 9, 5 => 25, 7 => 49, 2 => 4, 9 => 81, 6 => 36, "strangekeyhere" => 121 ]
*/

//------------------------------ REMOVING elements ------------------------------ 

/*
// 3
array_pop($luckyNumbers);
array_pop($speakNumbers);
array_pop($squareNumbers);

print_pretty_array($luckyNumbers);      // [ 0 => 69, 1 => 79, 2 => 999, 3 => 12 ]
print_pretty_array($speakNumbers);      // [ "nineteen" => 19, "two" => 2, "twelwe" => 12, "thirtythree" => 33 ]
print_pretty_array($squareNumbers);     // [ 3 => 9, 5 => 25, 7 => 49, 2 => 4, 9 => 81 ]
*/

/*
//4
array_shift($luckyNumbers);
array_shift($speakNumbers);
array_shift($squareNumbers);

print_pretty_array($luckyNumbers);      //  [ 0 => 79, 1 => 999, 2 => 12, 3 => 16 ]
print_pretty_array($speakNumbers);      //  [ "two" => 2, "twelwe" => 12, "thirtythree" => 33, "twentysix" => 26 ]
//Note that reindexation occurs here
print_pretty_array($squareNumbers);     //  [ 0 => 25, 1 => 49, 2 => 4, 3 => 81, 4 => 36 ]
*/

/*
//5
unset($luckyNumbers[3]);
unset($speakNumbers["twelwe"]);
unset($squareNumbers[5]);

print_pretty_array($luckyNumbers);      // [ 0 => 69, 1 => 79, 2 => 999, 4 => 16 ]
print_pretty_array($speakNumbers);      // [ "nineteen" => 19, "two" => 2, "thirtythree" => 33, "twentysix" => 26 ]
print_pretty_array($squareNumbers);     // [ 3 => 9, 7 => 49, 2 => 4, 9 => 81 , 6 => 36 ]
*/

