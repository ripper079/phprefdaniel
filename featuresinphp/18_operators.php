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

//Asignment ooperator
// $aa = 2;
// $aa *= 4;       //$aa = $aa*4
// echo $aa;

//Comparison operators
$a = 4;
$b = "4";

if ($a == $b){

}

//Checks also data type when 3 characters
if ($a === $b){
    
}
//Comparison Operators
//!=, <>, !== , < , >, <=, >=, <=>

//Logical operators - Short Cicuiting
//https://www.php.net/manual/en/language.operators.logical.php


//Error Control Operator (@) 
    //Caution danger - Supresses error messages - Toogle between to se difference
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

//Bitwise operators - &(and operator), |(or operator),  ^(xor operator), ~(negatition operator), <<(shift left operator), >>(shift right operator),
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
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];
$z = $x + $y;
var_dump($z);

//Execution Operators (``)
//Type Operators (instanceof)
//Nullsafe Operators (?) - PHP 8

?>