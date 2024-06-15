<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//https://www.php.net/manual/en/ref.array.php

//Make the array visual readable
function print_pretty_array($array, $pTitle="")
{
    if (strlen($pTitle) > 0)
    {
        echo "------" . $pTitle . "------<br>";
    }

    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

#   -------------- COPY whole arrays FUNCTIONS --------------
# There function works best with scalar values

//Shallow copy - a Copy where nested and references still refers to the same object
// Deep copy - The newly created object is totally independent from the source and cant modify the source array



// 1
# Assignment operator
#   Shallow copy 
#   Note: Works good for scalar types (int, float, bool, string, )

// 2
# array_merge() function
# Shallow copy to
# Creates a a new array and populates it

// 3
# array_slice() function
# Shallow copy to
# Creates a a new array and populates it

// 4
# array_map() function
# Deep copy
# Note: Useful for arrays containing object or other arrays

// 5
# using json_encode() and json_deocode()
# Deep copy
# Note: Useful for copying complex and nested arrays (multi-dimensional arrays)
# Note: Wont work directly with objects

$originalArray = [ 66, 11, 57, 66, 150, 101] ;

$dummyValues = [
    "sixtsix" => 66,
    "fiftyfive" => 57,
    "eleven" => 11,
    "hundredone" => 101,
    "hundredfifty" => 150
];

print_pretty_array($originalArray, "Init values - Original array");     // [ 0 => 66, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]
print_pretty_array($dummyValues, "Init values - Associative array");    // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 11, "hundredone" => 101, "hundredfifty" => 150 ]

/*
// 1 
$copyArrayNumber = $originalArray;      //Shallow copy
$copyArrayNumber[0] = 99999;            //Only changes the original array

print_pretty_array($originalArray, "Original array (using assign copy)");       //  [ 0 => 66, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]
print_pretty_array($copyArrayNumber, "COPIED array (using assign copy)");   //  [ 0 => 99999, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]

$copyArrayAssociative = $dummyValues;
$copyArrayAssociative["eleven"] = 1111;

print_pretty_array($dummyValues, "Original associative array (after copy)");        // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 11, "hundredone" => 101, "hundredfifty" => 150 ]
print_pretty_array($copyArrayAssociative, "COPY associative array (after copy)");   // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 1111, "hundredone" => 101, "hundredfifty" => 150 ]
*/

/*
// 2
$copyArrayNumber = array_merge([], $originalArray);         //Shallow copy
$copyArrayNumber[0] = 99999;                                //Only changes the original array

print_pretty_array($originalArray, "Original array (using array_merge copy)");       //  [ 0 => 66, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]
print_pretty_array($copyArrayNumber, "COPIED array (using array_merge copy)");               //  [ 0 => 99999, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]

$copyArrayAssociative = $dummyValues;
$copyArrayAssociative["eleven"] = 1111;

print_pretty_array($dummyValues, "Original associative array (after copy)");        // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 11, "hundredone" => 101, "hundredfifty" => 150 ]
print_pretty_array($copyArrayAssociative, "COPY associative array (after copy)");   // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 1111, "hundredone" => 101, "hundredfifty" => 150 ]
*/

/*
// 3
$copyArrayNumber = array_slice($originalArray, 0);          //Shallow copy, 0 is starting offset
$copyArrayNumber[0] = 99999;                                //Only changes the original array

print_pretty_array($originalArray, "Original array (using array_slice to copy)");       //  [ 0 => 66, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]
print_pretty_array($copyArrayNumber, "COPIED array (using array_slice to copy)");               //  [ 0 => 99999, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]

$copyArrayAssociative = $dummyValues;
$copyArrayAssociative["eleven"] = 1111;

print_pretty_array($dummyValues, "Original associative array (after copy)");        // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 11, "hundredone" => 101, "hundredfifty" => 150 ]
print_pretty_array($copyArrayAssociative, "COPY associative array (after copy)");   // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 1111, "hundredone" => 101, "hundredfifty" => 150 ]
*/

/*
// 4
$copyArrayNumber = array_map(fn($aNumber) => $aNumber, $originalArray);             //Deep copy
$copyArrayNumber[0] = 99999;                                                        //Only changes the original array

print_pretty_array($originalArray, "Original array (using array_map to copy)");       //  [ 0 => 66, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]
print_pretty_array($copyArrayNumber, "COPIED array (using array_map to copy)");               //  [ 0 => 99999, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]

$copyArrayAssociative = $dummyValues;
$copyArrayAssociative["eleven"] = 1111;

print_pretty_array($dummyValues, "Original associative array (after copy)");        // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 11, "hundredone" => 101, "hundredfifty" => 150 ]
print_pretty_array($copyArrayAssociative, "COPY associative array (after copy)");   // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 1111, "hundredone" => 101, "hundredfifty" => 150 ]
*/

// 5
$copyArrayNumber = json_decode(json_encode($originalArray), true);                  //Deep copy
$copyArrayNumber[0] = 99999;                                                        //Only changes the original array

print_pretty_array($originalArray, "Original array (using json_decode and json_encode to copy)");       //  [ 0 => 66, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]
print_pretty_array($copyArrayNumber, "COPIED array (using json_decode and json_encode to copy)");               //  [ 0 => 99999, 1 => 11, 2 => 57, 3 => 66, 4 => 150, 5 => 101 ]

$copyArrayAssociative = $dummyValues;
$copyArrayAssociative["eleven"] = 1111;

print_pretty_array($dummyValues, "Original associative array (after copy)");        // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 11, "hundredone" => 101, "hundredfifty" => 150 ]
print_pretty_array($copyArrayAssociative, "COPY associative array (after copy)");   // [ "sixtsix" => 66, "fiftyfive" => 57, "eleven" => 1111, "hundredone" => 101, "hundredfifty" => 150 ]