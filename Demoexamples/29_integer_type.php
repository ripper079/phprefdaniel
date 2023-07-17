<?php

echo "Datatype int demo<br>";

$age = 43;
$minSize = PHP_INT_MIN;
$maxSize = PHP_INT_MAX;

$oneMillion = 1000000;
$oneMillionPrettyfied = 1_000_000;

echo "Min int value=" . $minSize . "<br>";
echo "Max int value=" . $maxSize . "<br>";

//Overflow/underflow example, changes datatype
$overFlow = PHP_INT_MAX + 1;
$underFlow = PHP_INT_MIN - 1;

echo "Overflow of int=" . $overFlow . "<br>";
echo "Underflow of int=" . $underFlow . "<br>";

//Conversion and type casting (uncomment the one you want to check)
//$x = (int) true;                  //int(1)
//$x = (int) false;                 //int(0)
//$x = (int) 5.98;                  //int(5)
//$x = (int) "";                    //int(0)
//$x = (int) "Dan";                   //int(0)
//$x = (int) "59";                   //int(59)
//$x = (int) "12.45";               //int(12)
//$x = (int) "29qwe";               //int(29)
$x = (int) null;                    //int(0)
var_dump($x);
echo "<br>";

if (is_int($age)) {
    echo "Is an int<br>";
} else {
    echo "Is NOT an int<br>";
}
