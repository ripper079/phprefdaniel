<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//https://www.php.net/manual/en/ref.array.php

$juicyFruits=['Pinapple', 'Banana', 'Raspberry'];
//Get Length
echo count($juicyFruits) . "<br>";

//Search array, in_array return true/false
$searchForFruit = 'Pinapple';
if (in_array($searchForFruit, $juicyFruits)) {
    echo "The fruit $searchForFruit is present in the array<br>";
} else {
    echo "No matching fruit<br>";
}

//Add(after last element) to array ), alt 1
$juicyFruits[] = 'Blueberry';
print_r($juicyFruits);
echo "<br>";
//Add(after last element) to array, alt 2 (advantage add more than one each time)
array_push($juicyFruits, 'Apple', 'Prum', 'blueberry', 'strawberry', 'banana', 'raspberry');
print_r($juicyFruits);
echo "<br>";
//Add(at the beginning of the array)
array_unshift($juicyFruits, 'Mango');
print_r($juicyFruits);
echo "<br><br>";

//Split to 3 chunks that means that each array contain max 2 elements(independet of numbers of chunks), creates a 2D array
//Important when indexing chunkedArrayFruits[a][b] that be can ONLY be 0 or 1
$chunkedArrayFruits = array_chunk($juicyFruits, 3);
$countArrays = count($chunkedArrayFruits);
echo 'Number of array after chunking ' . $countArrays . '<br>';

for ($i = 0; $i < $countArrays; ++$i) {
    $countElementsInCurrentArray = count($chunkedArrayFruits[$i]);
    for ($j =0; $j < $countElementsInCurrentArray; ++$j) {
        echo 'Element[' . $i . '][' . $j . ']=' . $chunkedArrayFruits[$i][$j] . ' , ';
    }
    echo '<br>';
}

//Remove from array
//Remove last item
array_pop($juicyFruits);
print_r($juicyFruits);
echo "<br>";
//Remove item from begining of array
array_shift($juicyFruits);
print_r($juicyFruits);
echo "<br>";
//Remove item with an index, caution here the index is also removed BUT remaining index in not in sequential order now wtf?
unset($juicyFruits[2]);
print_r($juicyFruits);
echo "<br><br>";

//Mergo 2 arrays into 1
$arrayOneInts = [1,2,3];
$arrayTwoInts = [8,10,21];
$arrayCurrentCustomer = ["Daniel", "Pelle", "Oscar"];
$arrayProspectCustomer = ["Bill", "Elon", "Janne"];


//Merging arrays
//$mergedArraysOfInt = array_merge($arrayOneInts, $arrayTwoInts);
//$mergedAllCustomers = array_merge($arrayCurrentCustomer, $arrayProspectCustomer);

//Could also be achived with the spread operator ...
$mergedArraysOfInt = [...$arrayOneInts, ...$arrayTwoInts];
$mergedAllCustomers = [...$arrayCurrentCustomer, ...$arrayProspectCustomer];

//Flip the array, change value for key and key for value
$flippedNumbers = array_flip($mergedArraysOfInt);

echo "Original Array(s) of ints<br>";
print_r($arrayOneInts);
echo "and <br>";
print_r($arrayTwoInts);
echo "<br>";
echo "Combined array<br>";
print_r($mergedArraysOfInt);
echo "<br>";
echo "Flipped Combined array (swap key and value)<br>";
print_r($flippedNumbers);
echo "<br><br>";
echo "Original Array(s)<br>";
print_r($arrayCurrentCustomer);
echo "and <br>";
print_r($arrayProspectCustomer);
echo "<br>";
echo "Combined array<br> of string(s)";
print_r($mergedAllCustomers);
echo "<br><br>";

//On hash collison that new key/value pair overwrites the old
$socialSecurityNumberKey = ['19791216-4857', '194512-4312', '19231417-2712'];
$firstAndLastNameValue = ['Daniel Oikarainen', 'Joe Doe', 'Mary Foo'];
// Creates an array by using one array for keys and another for its values aka hashtable
$lookUpArray = array_combine($socialSecurityNumberKey, $firstAndLastNameValue);
print_r($lookUpArray);
echo "<br><br>";

echo $lookUpArray['19791216-4857'] . " Count=" . count($lookUpArray) . "<br>";
//Return an array of all the keys
//print_r(array_keys($lookUpArray));
echo "<br><br>";
//Corresponding the values
//print_r(array_values($lookUpArray));
echo "<br><br>";
//Creates an 'dynamic' array starts from 10 and ends <=60 with step of 2
//10,12,14.....56,58,60
$evenNumber = range(10, 60, 2);
print_r($evenNumber);
echo "<br><br>";
//Map for each item
$evenNumberString = array_map(function ($aNumber) {
    return "Number ${aNumber}";
}, $evenNumber);
//The arrow function
//$evenNumberString = array_map(fn($aNumber) => "Number ${aNumber}", $evenNumber);
print_r($evenNumberString);
echo "<br><br>";
//Create a array based on filtering
$arraysGreaterThan20 = array_filter($evenNumber, fn ($aNumber) => $aNumber > 20);
print_r($arraysGreaterThan20);
echo "<br><br>";

$totalSumOfEvenNumbers = array_reduce($evenNumber, fn ($carry, $number) => $carry+$number);
var_dump($totalSumOfEvenNumbers);
echo "<br><br>";

$delimeter = ',';
$seperateWords = \explode($delimeter, 'hello,world, how are you');
var_dump($seperateWords);


function prettyPrintArray(array $value): void
{
    echo '<pre>';
    print_r($value);
    echo '</pre>'
}

