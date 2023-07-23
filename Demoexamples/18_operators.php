<?php

//String operators
// $a = "Hello";
// $b = "World";
// $c = $a . " " . $b;
// echo $c;

//Arithmetic operator
// echo 1 + 2 . "<br>";            //Addition
// echo 10 % 3 . "<br>";                    //Modulo
// echo 5 **3 . "<br>";                    //To power of

//Assignment operator
// $aa = 2;
// $aa *= 4;       //$aa = $aa*4
// echo $aa;

$a = 4;
$b = "4";

//Comparison operators
if ($a == $b){

}

//Checks also data type aka identity operator
if ($a === $b){
    
}
//Comparison Operators
//!=, <>, !== , < , >, <=, >=, <=>, ==, ===

//Logical operators - Short Circuiting
//https://www.php.net/manual/en/language.operators.logical.php


//Error Control Operator (@) 
    //Caution danger - Suppresses error messages - Toogle between to se difference
//$x = file("this:file:should:exists.txt");
//$x = @file("this:file:should:exists.txt");

//Increment/decrement Operator (possible to use them with the other arithmetic operator)
https://www.php.net/manual/en/language.operators.increment.php
/*
$p = 5;
$p++;       //Postfix - Increment by one
$p--;       //Postfix - Decrement by one
++$p;       //Prefix - Increment by one
--$p;       //Prefix - Decrement by one
$p +=7      //Increment by 7
*/

//Bitwise operators - &(and operator), |(or operator),  ^(xor operator), ~(negation operator), <<(shift left operator), >>(shift right operator),
/*
$x = 6;
$y = 3;
// 110
// &
// 011
// -----
// 010
var_dump($x & $y);
*/

//Array operator ( + == === != <> !===)
/*
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];
$z = $x + $y;
var_dump($z);
*/


//Execution Operators (``)
//Type Operators (instanceof)
//Nullsafe Operators (?) - PHP 8

//Null Coalescing operator
$alienName = null;
$value = $alienName ?? "Undefined value";

//Nullsafe Operator ?, e.i
//Shorcircuit everything. if something return null, in this case getCustomer() everything on the right side will get discarded
//$transaction->getCustomer()?->aymentProfile->id;

var_dump($alienName);
var_dump($value);

?>