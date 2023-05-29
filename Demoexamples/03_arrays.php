<?php
//enforce strict typing in PHP functions
declare(strict_types = 1); 

$numbers = [1,44,55,22];
// var_dump($numbers);
$fruits = array('apple', 'orange', 'pear');     //The old way of doing it
// echo $fruits[1];

//Associate array (lika a hashtable). You create the index
$colors = [
    1 => 'Red',
    2 => 'Blue',
    3 => 'Green'
];
// echo $colors[3];

$person = [
    'firstName' => 'Daniel',
    'lastName' => 'Oikarainen',
    'age' => 43,
    'children' => true
];
// echo $person['age'];

$people = [
    [
        'firstName' => 'Bill',
        'lastName' => 'Gates',
        'age' => 65,
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
// echo $people[1]['lastName'];
var_dump(json_encode($people));
?>
