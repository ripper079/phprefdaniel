<?php

//https://www.php.net/manual/en/language.operators.php

//Arithmetic operators (  +  -  /  %  **)    // % = Modulo , ** = Exponentiation e.i 2^7 =  2 ** 7
//Assignment operators (  =  +=  -=  *=  /=  %=  **=)
//String operators (  .  .=  )
//Comparison operators (  ==  ===  !=   <>  !==  <  >  <=  >=  <=>  ??  ?:  )   //=== and !== are strict operator, no type conversion allowed
// ?? = null coalescing operator. ?: ternary operator, spaceship operator <=>
//Error Control Operator (@)
//Increment/decrement operator ( ++  --)
//Logical operator  ( && || !  and  or  xor)
//Bitwise operator  (&  |  ^  ~  <<  >>)
//Array operators (  +  ==  ===  !=  <>  !==)
//Execution operators ('')
//Type operators (instanceof)
// Nullsafe operators - PHP (?)

echo "Exponentiation: 2^7= " .  (2 ** 7) . "<br />";
//String concatenation
$greeting = "Hello";
$greeting .= " World!";
echo "Nice Greeting=" . $greeting . "<br />";
//Spaceship operators, return -1 or 0 or 1 [play with variable $numberOne]
$numberOne = 1;
$numberTwo = 100;
//If $numberOne is smaller than $numberTwo it returns -1
//If $numberOne is greater than $numberTwo it return 1
//If the both are equal it returns 0
var_dump($numberOne <=> $numberTwo);

$age = 12;
// ?: ternary operator, glorified shortcut for an if else
//              (Evaluation) ? 'Return this if true' : 'otherwise return this'             //Return value can be anything
$matureStatus = ($age >= 18) ? 'Age of majority - Legal adulthood' : 'Still Underage';
echo "You have mature status= " . $matureStatus . "<br />";

//Null coalescing operator (if variable is null then it return a specified value). Be careful with implicit type conversion that php does
//$formFilledStatus = null;           //You can even comment out this row
$fullName = $formFilledStatus ?? 'Default Full Name Generated';


echo $fullName;
