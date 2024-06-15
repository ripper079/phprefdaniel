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

#   The array_filter() function - is used to filtering elements based on some condition. Returns a subset of the elements from the $sourceArray (could be the same size to if no filtering is performed)

# array_filter($array, $callbackFunction, $mode)        
#   Creates a new array. Do NOT modify original array. 
#   The callback function iterates all elements in the the array, only the value (not key). When callback function returns true, the current element gets "added" to the new filtered array
#   The $mode parameter is optional (php 7.4) The default is ARRAY_FILTER_USE_BOTH. Determines which elements need to passed to callback (ARRAY_FILTER_USE_BOTH, ARRAY_FILTER_USE_KEY, ARRAY_FILTER_USE_VALUE)
#   If only one parameter is specified then this comes the value

class Person
{
    public $firstName;      //public string $firstName;
    public $lastName;       //public string $lastName;
    public $age;            //public int $age;
    public $male;           //public bool $male;

    public function __construct($pFirstName, $pLastName, $pAge, $pMale)
    {
        $this->firstName = $pFirstName;
        $this->lastName = $pLastName;
        $this->age = $pAge;
        $this->male = $pMale;
    }
}


//Has keys "nineteen", "two", "thirtythree", "twentysix"
$speakNumbers =[
    "nineteen" => 19,                   
    "two" => 2,
    "twelwe" => 12,
    "thirtythree" => 33,
    "twentysix" => 26
]; 

$danne = new Person("Dan", "Andersson", 44, true);
$joe = new Person("Joe", "Doe", 15, true);
$jane = new Person("Jane", "Svensson", 67, false);
$jessie = new Person("Jessie", "Andersson", 23, false);
$bill = new Person("Bill", "Goat", 52, true);

$people = [
    $danne,
    $joe,
    $jane,
    $jessie,
    $bill
];

$listMalePersons = array_filter($people, function($onePerson)
{
    if ($onePerson->male)
    {
        return true;
    }
});
$listFemalePersons = array_filter($people, fn($data) => !$data->male );



$NumbersOver20 = array_filter($speakNumbers, function ($data)
{
    if ($data > 20)
    {
        return true;
    }
});

//Or with arrow function php >= 7.4
//$luckyNumbersOver20 = array_filter($luckyNumbers, fn($data) => $data > 20);


//Now we take into consideration of both keys and value, explictly
$numberStartWitht = array_filter($speakNumbers, function($value, $key)
{
    if (str_starts_with($key, "t"))
    {
        return true;
    }
}, ARRAY_FILTER_USE_BOTH);


print_pretty_array($NumbersOver20);     // [ "thirtythree" => 33, "twentysix" => 26 ]
print_pretty_array($listMalePersons);   // [  ["firstName" => "Dan", "lastName" => "Andersson", "age" => 44, male => 1], ["firstName" => "Joe", "lastName" => "Doe", "age" => 15, "male" => 1], [ "firstName" => "Bill", "lastName" => "Goat", "age" => 52, "male" => 1]   ]
print_pretty_array($listFemalePersons); // [  ["firstName" => "Jane", "lastName" => "Svensson", "age" => 67, "male" => ], [ "firstName" => "Jessie", "lastName" => "Andersson", "age" => 23, "male" => ]    ]
print_pretty_array($numberStartWitht);  // [  "two" => 2, "twelwe" => 12, "thirtythree" => 33, "twentysix" => 26 ]