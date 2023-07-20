<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//Normal functions
//Variadic functions, with plat operator
//Type hinting (parameter and return values)
//Named arguments
//Global variables demonstration
//Spread/splat/unpack/eclipse operator used

$quadrupleFactor = 4;
//By default values are passed by value. If you want to pass value by reference then you need to precede the variable with &
//ei
/*
function doubleItUp(int &$number){
    $number *=2;
}
*/

//Returns Nullable types and ints
function foo(): ?int
{
    //Both ar ok
    return null;
    //return 2345;
}

//Return ints or array
function foobar(): int|array
{
    //First 2 ok
    return 12;
    //return [1,6];

    //NOK
    //return "PizzaTime";
}

echo foobar(4, 67) . "<br />";

//Returns int. Argument is using the splat operator
function sumOfAll(...$numbers): int
{
    $totalSum = 0;

    foreach($numbers as $oneNumber) {
        $totalSum+= $oneNumber;
    }

    return $totalSum;
}

echo sumOfAll(30, 5, 20, 7) . "<br>";

//Function have their own scope

//GLOBALSCOPE -> aka global variable
$bestCountryInTheWorld = "Sweden";

function printBestCountry(): void      //This function does NOT return anything
{//Enable global scope of variable
    global $bestCountryInTheWorld;
    echo "$bestCountryInTheWorld<br>";
}
printBestCountry();

function printBestCountryOrMaybe(): void   //This function does NOT return anything
{//Local scope precedence
    $bestCountryInTheWorld = "Finland";
    echo "$bestCountryInTheWorld<br>";
}
printBestCountryOrMaybe();

//name = addNumbers, parameter1 $a (type of int OR float), parameter2 $b (type of int OR float), and the return value is of type int OR float
function addNumbers(int|float $a, int|float $b): int|float
{
    return $a + $b;
}
$sumOfAdd=addNumbers(10, 23);
echo "The adding result is $sumOfAdd<br>";

//Default value of 100, if none is provided for $b, and the return value is of type int
function subNumbers(int $a, int $b = 100): int
{
    return $b - $a;
}
$sumOfSub=subNumbers(13, 50);
//Invoked with named arguments
echo "The subtraction result is $sumOfSub<br>";

//Default value if none is passed
function doubleNumbers(int $a = 100): int   //return value is of type int
{//Local scope
    $factor=2;
    return $factor * $a;
}
//Local scope
$baseSalary = 53000;
echo "Double the salary $baseSalary is " . doubleNumbers($baseSalary) . "<br>";
echo "Double default value " . doubleNumbers() . "<br><br>";



//VARIADIC function
//The old way < PHP 5.6. A little confusing because arg count can != parameter count...
function sumAllOldWay()
{
    $parameters = func_get_args();   //Return an array of function parameters
    $countParameters = count($parameters);
    $totalSum = 0;

    for ($i = 0; $i < $countParameters; ++$i) {
        $totalSum += $parameters[$i];
    }

    return $totalSum;
}

//The new way, >= PHP 5.6. Much clearer
function sumAllNewWay(...$numbers)
{
    $countParameters = count($numbers);
    $totalSum = 0;

    for ($i = 0; $i < $countParameters; ++$i) {
        $totalSum += $numbers[$i];
    }

    return $totalSum;
}

$numbersArrayToSum = [1000,10,1,100];
$primeNumberArray = [2, 3, 5, 7, 11, 13, 17];
//Choose on of the below by commentating out that one
// $sumOfNumbers = sumAllOldWay(10,5,20);
// $sumOfNumbers = sumAllNewWay(10,5,40);
//$sumOfNumbers = sumAllOldWay(...$numbersArrayToSum);      //Works
//$sumOfNumbers = sumAllNewWay(...$numbersArrayToSum);      //Works
$sumOfNumbers = sumAllNewWay(...$numbersArrayToSum, ...$primeNumberArray);      //Works
echo "Variadic functions!!! Calc the sum of an array=" . $sumOfNumbers ."<br>";



//NAMED ARGUMENTS (Makes order of passing argument not relevant as long a name(s) matches)
$diffSubtraction=subNumbers(b: 1000, a: 300);
echo "Using named arguments, the sum difference is= " . $diffSubtraction . "<br />";
$subtractionArray = ['b' => 500, 'a' => 50];        //Even possible with associative arrays!Keys must match parameter names of function
$diffSubtraction=subNumbers(...$subtractionArray);  //But spread operator is needed
echo "Using named arguments with arrays the sum difference is= " . $diffSubtraction . "<br />";
echo "<br />";



//VARIABLE function (call a function through a variable)
$varToFunc = 'sumAllNewWay';
//Invoke it
echo "Call a function through a variable function= " . $varToFunc(300, 100) . "<br />";

//Function expression aka Anonymous functions (no name)
//Also Lambda functions????
function () {
    return "Function expression";
};          // <- Needs to be ended with a semicolon!!!

//Closure - A (kind of) function expression that utilizes variables defined outside of its scope
//in this case $quadrupleFactor. Its passed by value so the outer $quadrupleFactor is NOT reflected to changes made inside this function
$multiply = function (int $a, int $b) use ($quadrupleFactor): int {
    //$quadrupleFactor = 10;        //This changes only takes places inside the function
    return $a * $b * $quadrupleFactor;
};              // <- Needs to be ended with a semicolon!!!
echo $multiply(12, 25000) . " year salary<br>";

//Arrow function, aka "short closures. Pay attention that keyword use is not needed here. Arrow functions have access to 'outside' variables.
//Arrow function a single line expressions, aka single line code
$squareItUp = fn (int $a): int => $a*$a;            //With type hinting
$greetingPerson = fn (string $name, int $age): string => "Hello " . $name . ", your age is " . $age . ". Favorite number " . $quadrupleFactor;
echo $squareItUp(8) . "<br>";
echo $greetingPerson("Daniel", 43) . "<br />";
