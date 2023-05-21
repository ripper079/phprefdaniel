<?php
//enforce strict typing in PHP functions
declare(strict_types = 1); 

//By default values are passed by value. If you want to pass value by reference then you need to precede the variable with &
//ei
/*
function doubleItUp(int &$number){
    $number *=2;
}
*/

//Nullable types
function foo(): ?int 
{
    //Both ar eok
    return null;
    //return 2345;
}

function foobar(): int|array
{
    //First 2 ok
    return 12;
    //return [1,6];

    //NOK
    //return "PizzaTime";
}

//splat operator
function sumOfAll(...$numbers) : int
{
    $totalSum = 0;

    foreach($numbers as $oneNumber){
        $totalSum+= $oneNumber;
    }

    return $totalSum;
}

echo sumOfAll(30,5,20,7) . "<br>";

//Function have their own scope

//GLOBALSCOPE -> aka gloabasl variable
$bestCountryInTheWorld = "Sweden";
function printBestCountry(): void
{
    //Enable global scope of variable
    global $bestCountryInTheWorld;
    echo "$bestCountryInTheWorld<br>";
}
printBestCountry();

function printBestCountryOrMaybe(): void
{
    //Local scope precedence
    $bestCountryInTheWorld = "Finland";
    echo "$bestCountryInTheWorld<br>";
}
printBestCountryOrMaybe();

//name = addNumbers, parameter1 $a, parameter2  $b, and return value is int
function addNumbers(int $a, int $b): int 
{
    return $a + $b;
}
$sumOfAdd=addNumbers(10,23);
echo "The adding result is $sumOfAdd<br>";

//Default value of 100, if none is provided
function subNumbers(int $a, int $b = 100): int 
{
    return $b - $a;
}
$sumOfSub=subNumbers(13, 50);
echo "The subtraction result is $sumOfSub<br>";

//Default value if none is passed
function doubleNumbers(int $a = 100): int 
{
    //Local scope
    $factor=2;
    return $factor * $a;
}
//Local scope
$baseSalary = 53000;
echo "Double the salary $baseSalary is " . doubleNumbers($baseSalary) . "<br>";
echo "Double default value " . doubleNumbers() . "<br>";


//Function expression
function(){
    return "Function expression";
};

//Anonymous functions (no name)
//Aka lamda function
//Aka Closure
$multiply = function(int $a, int $b): int 
{
    return $a * $b;
};

echo $multiply(12, 33000) . " year salary<br>";

//One liner, aka arrow function
$squareItUp = fn(int $a): int => $a*$a;
echo $squareItUp(8) . "<br>";



?>
