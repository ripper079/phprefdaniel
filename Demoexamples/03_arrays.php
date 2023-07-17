<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//Ps More array functions in 07_arrayfunctions.php

//Key can be of type integer (arays with index) and string(associative arrays)

$numbers = [1,44,55,22];    //var_dump(isset($numbers[4]));       //bool(false)
$fruits = array('apple', 'orange', 'pear');     //The old way of doing it; echo $fruits[1];

//Associate array (like a hashtables). You create the index
$colors = [1 => 'Red', 2 => 'Blue', 3 => 'Green'];
//Also adds the correct index
array_push($colors, "Pink", "Blue");        // echo $colors[3];

$person = [ 'firstName' => 'Daniel', 'lastName' => 'Oikarainen', 'age' => 43, 'children' => true ];
// echo $person['age'];

$people = [
    [
        'firstName' => 'Bill',
        'lastName' => 'Gates',
        'age' => 65,
        'children' => true
    ],
    [
        'firstName' => 'Steve ',
        'lastName' => 'Wozniak',
        'age' => 71,
        'children' => true
    ],
    [
        'firstName' => 'Elon',
        'lastName' => 'Musk',
        'age' => 53,
        'children' => true
    ],
    [
        'firstName' => 'Junior',
        'lastName' => 'coder',
        'age' => 14,
        'children' => false
    ]
];



//Print the whole array
printPrettyArray($people);


//Adds to then end of the array
$people[] = [
    'firstName' => 'Mark',
    'lastName' => 'Zuckerberg',
    'age' => 37,
    'children' => true
];
//The same can be archived with array_push
array_push($people, [
    'firstName' => 'Steve ',
    'lastName' => 'Jobs',
    'age' => 55,
    'children' => true
]);



//Theese 2 function also reindex(rebuild) the array
//Remove and get(pop) the last element in array
$lastItem = array_pop($people);
//Remove and get(pop) the first element in array
$firstItem = array_shift($people);

//Alt to remove element, but Caution with value of keys. They do NOT behave 'naturally'
//Remove the first element with unset,
//unset($people[0]);

//Remove or empty the whole array, the array $people is no longer defined
//unset($people);

//Validation keys and values for an array
//The function isset is used to verify that a key exist and is not null
if (isset($people[67])) {
    echo "There is a person at index 67 that is " . $people[67] . "<br />";
} else {
    echo "You are trying to access an array that with an invalid index/key" . "<br />";
}
//Does the key exist
$fooArray = ['one' => 1, 'two' => 2, 'four' => 4, 'five' => 8, null => 'nothing'];
$isKeyTwoPresent = array_key_exists('two', $fooArray);     //-> bool(true)
$isKeyTwentyPresent = array_key_exists('twenty', $fooArray);     //-> bool(false)

//JSON
//This first version do NOT preserve the order of the people
$encodedPeopleArrayToJson = json_encode($people);
echo $encodedPeopleArrayToJson;   //[{"firstName":"Steve ","lastName":"Wozniak","age":71,"children":true},{"firstName":"Elon","lastName":"Musk","age":53,"children":true},{"firstName":"Junior","lastName":"coder","age":14,"children":false},{"firstName":"Mark","lastName":"Zuckerberg","age":37,"children":true}]
$decodedPeopleArrayFromJson = json_decode($encodedPeopleArrayToJson, true);     //If you omit the true then you get a stdClass Object instead
printPrettyArray($decodedPeopleArrayFromJson);
//This version preserves the order
$encodedFooArray = json_encode($fooArray, JSON_UNESCAPED_UNICODE);
$decodedFooArray = json_decode($encodedFooArray, true, 512, JSON_OBJECT_AS_ARRAY);  //512 is the depth that specifies maxium recursion (prevent stack overflow)
printPrettyArray($fooArray);
printPrettyArray($decodedFooArray);

function printPrettyArray($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
